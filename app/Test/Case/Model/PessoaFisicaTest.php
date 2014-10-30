<?php
App::uses('PessoaFisica', 'Model');

class PessoaFisicaTest extends CakeTestCase {
	public $fixtures = array(
		'app.pessoa_fisica'
	);
	private $dados = array(
		'PessoaFisica'=>array(
			
				'nome'=>'Carlos Eduardo Lima Braz',
				'data_nascimento'=>'30/09/1992',
				'sexo'=>'M'
				
			)
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

/**
 * testSalvaPessoaFisica method
 *
 * @return void
 */
	public function testSalvaPessoaFisica() {		
		$resultado = (bool) $this->PessoaFisica->salvaPessoaFisica($this->dados);
		$this->assertTrue($resultado);			
	}

}
