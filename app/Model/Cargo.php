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

}
