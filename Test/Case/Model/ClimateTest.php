<?php
App::uses('Climate', 'Model');

/**
 * Climate Test Case
 *
 */
class ClimateTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.climate',
		'app.city',
		'app.province',
		'app.country'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Climate = ClassRegistry::init('Climate');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Climate);

		parent::tearDown();
	}

}
