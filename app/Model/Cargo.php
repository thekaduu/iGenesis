<?php
App::uses('AppModel', 'Model');
/**
 * Cargo Model
 *
 */
class Cargo extends AppModel {

	/**
	 * Display field
	 *
	 * @var string
	 */
	public $displayField = 'descricao';
	//Validação
	public $validate = array(
	'descricao' => array(
		'notEmpty' => array(
			'rule' => array('notEmpty'),
			'message' => 'Campo Obrigatório',
		),
		'isUnique'=>array(
			'rule' => 'isUnique',
			'message' => 'Cargo já cadastrado no sistema',			
			'on' => 'create'
			),
		'size' => array(
        	'rule' => array('between', 0, 50),
        	'message'=> 'O cargo deve possuir no máximo 50 caracteres'
        	)
	));

	//Métodos
	/**
	*	Salva apenas um cargo
	*	@author Carlos Eduardo Lima <carloseduardolbraz@gmail.com>
	*	@param mixed $array_cargo
	*	@return bool
	*	@throws LogicException 
	*/
	public function salvaCargo($array_cargo){
		if(!is_array($array_cargo)){
			throw new LogicException("Parâmetro array de cargos é obrigatório", 1);			
		}					
		try{
			return (bool)$this->save($array_cargo);				

		}catch(Exception $e){			
			return false;
		}
	}

	/**
	*	Retorna lista de cargos já cadastrados no sistema
	*	@author Carlos Eduardo Lima <carloseduardolbraz@gmail.com>
	*	@return mixed
	*/
	public function listaTodos(){
		return $this->find('all');
	}

	public function listaDropBox(){
		$this->recursive = -1;
		return $this->find('all');
	}

	

}
