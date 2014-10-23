<?php
App::uses('AppModel', 'Model');
/**
 * Candidato Model
 *
 * @property PessoaFisicas $PessoaFisicas
 * @property Eleicoes $Eleicoes
 * @property Cargos $Cargos
 */
class Candidato extends AppModel {

/**
 * Display field
 *
 * @var string
 */
	public $displayField = 'id';

/**
 * Validation rules
 *
 * @var array
 */
	public $validate = array(
		'pessoa_fisicas_id' => array(
			'numeric' => array(
				'rule' => array('numeric'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'eleicoes_id' => array(
			'numeric' => array(
				'rule' => array('numeric'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'cargos_id' => array(
			'numeric' => array(
				'rule' => array('numeric'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
	);

	//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * belongsTo associations
 *
 * @var array
 */
	public $belongsTo = array(
		'PessoaFisicas' => array(
			'className' => 'PessoaFisicas',
			'foreignKey' => 'pessoa_fisicas_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'Eleicoes' => array(
			'className' => 'Eleicoes',
			'foreignKey' => 'eleicoes_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'Cargos' => array(
			'className' => 'Cargos',
			'foreignKey' => 'cargos_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);
}
