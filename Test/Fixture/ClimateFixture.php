<?php
/**
 * ClimateFixture
 *
 */
class ClimateFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'primary'),
		'city_id' => array('type' => 'integer', 'null' => false, 'default' => null),
		'date' => array('type' => 'datetime', 'null' => false, 'default' => null),
		'temperature' => array('type' => 'float', 'null' => false, 'default' => null, 'length' => '2,2'),
		'temp_min' => array('type' => 'float', 'null' => false, 'default' => null, 'length' => '2,2'),
		'temp_max' => array('type' => 'float', 'null' => false, 'default' => null, 'length' => '2,2'),
		'st' => array('type' => 'float', 'null' => true, 'default' => null, 'length' => '2,2'),
		'humidity' => array('type' => 'integer', 'null' => false, 'default' => null, 'length' => 3),
		'rain' => array('type' => 'integer', 'null' => true, 'default' => null, 'length' => 6),
		'snow' => array('type' => 'integer', 'null' => true, 'default' => null, 'length' => 6),
		'alert' => array('type' => 'boolean', 'null' => false, 'default' => '0'),
		'uv_index' => array('type' => 'integer', 'null' => true, 'default' => null, 'length' => 6),
		'pressure' => array('type' => 'integer', 'null' => false, 'default' => null, 'length' => 5),
		'winds' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 150, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'winds_id' => array('type' => 'integer', 'null' => true, 'default' => null),
		'indexes' => array(
			'PRIMARY' => array('column' => 'id', 'unique' => 1)
		),
		'tableParameters' => array('charset' => 'latin1', 'collate' => 'latin1_swedish_ci', 'engine' => 'InnoDB')
	);

/**
 * Records
 *
 * @var array
 */
	public $records = array(
		array(
			'id' => 1,
			'city_id' => 1,
			'date' => '2013-05-16 22:14:19',
			'temperature' => 1,
			'temp_min' => 1,
			'temp_max' => 1,
			'st' => 1,
			'humidity' => 1,
			'rain' => 1,
			'snow' => 1,
			'alert' => 1,
			'uv_index' => 1,
			'pressure' => 1,
			'winds' => 'Lorem ipsum dolor sit amet',
			'winds_id' => 1
		),
	);

}
