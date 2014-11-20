<?php
App::uses('AppModel', 'Model');
/**
 * EleicoesCargo Model
 *
 * @property Cargos $Cargos
 * @property Eleicoes $Eleicoes
 */
class EleicoesCargo extends AppModel {

/**
 * Validation rules
 *
 * @var array
 */
	public $validate = array(
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
		'vagas' => array(
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
		'Cargos' => array(
			'className' => 'Cargos',
			'foreignKey' => 'cargos_id',
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
		)
	);
}
