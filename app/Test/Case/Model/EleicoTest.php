<?php
App::uses('Eleico', 'Model');

/**
 * Eleico Test Case
 *
 */
class EleicoTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.eleico',
		'app.turno'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Eleico = ClassRegistry::init('Eleico');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Eleico);

		parent::tearDown();
	}

}
