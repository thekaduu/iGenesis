<?php
App::uses('Turno', 'Model');

/**
 * Turno Test Case
 *
 */
class TurnoTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.turno',
		'app.eleicoes'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Turno = ClassRegistry::init('Turno');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Turno);

		parent::tearDown();
	}

}
