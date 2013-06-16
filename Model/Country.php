<?php
App::uses('AppModel', 'Model');
/**
 * Country Model
 *
 * @property Province $Province
 */
class Country extends AppModel {

/**
 * Display field
 *
 * @var string
 */
	public $displayField = 'name';

/**
 * Validation rules
 *
 * @var array
 */
	public $validate = array(
		'name' => array(
			'alphanumeric' => array(
				'rule' => array('alphanumeric'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
			'notempty' => array(
				'rule' => array('notempty'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
	);

	//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * hasMany associations
 *
 * @var array
 */
	public $hasMany = array(
		'Province' => array(
			'className' => 'Province',
			'foreignKey' => 'country_id',
			'dependent' => true,
			'conditions' => '',
			'fields' => '',
			'order' => '',
			'limit' => '',
			'offset' => '',
			'exclusive' => '',
			'finderQuery' => '',
			'counterQuery' => ''
		),
		'Service' => array(
			'className' => 'Service',
			'foreignKey' => 'country_id',
			'dependent' => true,
			'conditions' => '',
			'fields' => '',
			'order' => '',
			'limit' => '',
			'offset' => '',
			'exclusive' => '',
			'finderQuery' => '',
			'counterQuery' => ''
		),
		'Parameter' => array(
			'className' => 'Parameter',
			'foreignKey' => 'country_id',
			'dependent' => true,
			'conditions' => '',
			'fields' => '',
			'order' => '',
			'limit' => '',
			'offset' => '',
			'exclusive' => '',
			'finderQuery' => '',
			'counterQuery' => ''
		)
	);

	public function saveClimateData($service, $data, $countryId=1){
		debug($service);
		//die('cac');
		$formattedData = array();
		$date = date("Y-m-d H:i:s");
		$options = array(
			'deep'	=>	true,
			'atomic'=>	false
		);
		$count=0;
		foreach ($data as $row) {
			$encoding = mb_detect_encoding(trim($row['province']), 'UTF-8, ISO-8859-1, ASCII');
			if ($encoding != "UTF-8") {
				debug($encoding);
				$row['province'] = mb_convert_encoding(trim($row['province']), "UTF-8", $encoding);;
			}

			$encoding = mb_detect_encoding(trim($row['city']), 'UTF-8, ISO-8859-1, ASCII');
			if ($encoding != "UTF-8") {
				debug($encoding);
				$row['city'] = mb_convert_encoding(trim($row['city']), "UTF-8", $encoding);
			}
			$this->Province->City->contain(array(
				'Province'=> array()
			));
			$result = $this->Province->City->find('first',array('fields'=>'City.id, City.name', 'conditions'=>array('Province.country_id'=>$countryId, 'Province.name'=>$row['province'],'or'=>array('City.name'=>$row['city'],'City.alias LIKE'=> "%".$row['city']."%"))));
			if (empty($result)) {
				pr("Create: ".$row['province']." - ".$row['city']);
				$this->log("Create: ".$row['province']." - ".$row['city'], 'DEBUG');
				$this->Province->contain();
				$id=$this->Province->find('first',array('fields'=>array('id','name'), 'conditions'=>array('name LIKE'=>$row['province'])));
				if (empty($id)) {
					pr("NO SE ENCUENTRA PROVINCIA");
				}
				$count++;
			}else {
				pr('Guardando');
				$aux = array(
					'Climate'	=>	array(
						'city_id'	=>	$result['City']['id'],
						'date'	=>	$date,
						'temperature'	=>	$row['services']['temperature'],
						'st'			=>	$row['services']['realFeel'],
						'humidity'		=>	$row['services']['humidity'],
						'pressure'		=>	$row['services']['pressure'],
						'winds'			=>	is_array($row['services']['winds'])?join(" ", $row['services']['winds']):null,
						'visibility'	=>	$row['services']['visibility'],
						'description'	=>	$row['services']['status']
					)
				);
				$this->Province->City->Climate->create();
				$result = $this->Province->City->Climate->save($aux);
				if ($result == false) {
					/*debug($this->Province->City->Climate->validationErrors);
					debug($aux);
					debug($row);
					pr('*************************************************');*/
				}

			}
		}
	}
}
