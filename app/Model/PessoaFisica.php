<?php
App::uses('AppModel', 'Model');
/**
 * PessoaFisica Model
 *
 */
class PessoaFisica extends AppModel {

/**
 * Display field
 *
 * @var string
 */
	public $displayField = 'nome';

/**
 * Validation rules
 *
 * @var array
 */
	public $validate = array(
		'nome' => array(
			'notEmpty' => array(
				'rule' => array('notEmpty'),
				'message' => 'Campo Obrigatório',
			),
			'isUnique'=>array(
				'rule' => 'isUnique',
				'message' => 'Nome já cadastrado no sistema'
				)
		),
		'data_nascimento' => array(
			'date' => array(
				'rule' => array('date'),
				'message' => 'Data Inválida!',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
	);


	//Métodos

	/**
	*	Salva uma pessoa fisica (não salva várias) convertendo a data no formato br para sql
	*	@author Carlos Eduardo Lima <carloseduardo@lanwise.com.br>
	*	@param mixed $array_pessoa_fisica
	*	@return mixed 
	*	@throws LogicException se não passar o parâmetro $array_pessoa_fisica
	*/
	public function salvaPessoaFisica($array_pessoa_fisica){
		if(!is_array($array_pessoa_fisica) || empty(@$array_pessoa_fisica['PessoaFisica'])){
			throw new LogicException("Parâmetro passado deve ser um array", 1);			
		}
		$data_nascimento = $array_pessoa_fisica['PessoaFisica']['data_nascimento'];
		$data_nascimento = $this->formataData($data_nascimento,'sql');

		$array_pessoa_fisica['PessoaFisica']['data_nascimento'] = $data_nascimento;
		
		return $this->save($array_pessoa_fisica);
		

	}





}
