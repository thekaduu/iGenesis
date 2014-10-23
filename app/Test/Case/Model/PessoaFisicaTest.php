<?php
App::uses('PessoaFisica', 'Model');

/**
 * PessoaFisica Test Case
 *
 */
class PessoaFisicaTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.pessoa_fisica',
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
		$this->PessoaFisica = ClassRegistry::init('PessoaFisica');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->PessoaFisica);

		parent::tearDown();
	}

}
