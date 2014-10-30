<?php
App::uses('Cargo', 'Model');

/**
 * Cargo Test Case
 *
 */
class CargoTest extends CakeTestCase {
	public $fixtures = array(
		'app.cargo'
	);

	private $dados = array(
	'Cargo' => array(
		'descricao' => 'Pastor'
	));


/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Cargo = ClassRegistry::init('Cargo');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Cargo);
		parent::tearDown();
	}

	public function testSalvaCargo(){		
		$resultado = $this->Cargo->salvaCargo($this->dados);		
		$this->assertTrue($resultado);
	}

}
