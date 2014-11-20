<?php
App::uses('EleicoesCargo', 'Model');

/**
 * EleicoesCargo Test Case
 *
 */
class EleicoesCargoTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.eleicoes_cargo',
		'app.cargos',
		'app.eleicoes'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->EleicoesCargo = ClassRegistry::init('EleicoesCargo');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->EleicoesCargo);

		parent::tearDown();
	}

}
