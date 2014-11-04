<?php
App::uses('AppModel', 'Model');
/**
 * Eleico Model
 *
 * @property Turno $Turno
 */
class Eleico extends AppModel {

/**
 * Use table
 *
 * @var mixed False or table name
 */
	public $useTable = 'eleicoes';

/**
 * Display field
 *
 * @var string
 */
	public $displayField = 'descricao';

/**
 * Validation rules
 *
 * @var array
 */
	public $validate = array(
		'descricao' => array(
			'notEmpty' => array(
				'rule' => array('notEmpty'),
				'message' => 'Campo Obrigatório',
				'allowEmpty' => false,
				'required' => false,				
			),
			'size'=>array(
				'rule'=>array('between',0,100),
				'message'=>'O Tamanho máximo para a este campo é 100 caracteres'
				)
		),
		'ano' => array(
			'numeric' => array(
				'rule' => array('numeric'),
				'message' => 'Ápenas permitido inserir Digitos',
				'allowEmpty' => false,
				'required' => false,				
			),
		),
	);

	//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * hasMany associations
 *
 * @var array
 */
	public $hasMany = array(
		'Turno' => array(
			'className' => 'Turno',
			'foreignKey' => 'eleicoes_id',
			'dependent' => false,
			'conditions' => '',
			'fields' => '',
			'order' => '',
			'limit' => '',
			'offset' => '',
			'exclusive' => '',
			'finderQuery' => '',
			'counterQuery' => ''
		)
	);

}
