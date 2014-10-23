<?php
App::uses('Candidato', 'Model');

/**
 * Candidato Test Case
 *
 */
class CandidatoTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.candidato',
		'app.pessoa_fisicas',
		'app.eleicoes',
		'app.cargos'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Candidato = ClassRegistry::init('Candidato');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Candidato);

		parent::tearDown();
	}

}
