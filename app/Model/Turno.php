<?php
App::uses('AppModel', 'Model');
/**
 * Turno Model
 *
 * @property Eleicoes $Eleicoes
 */
class Turno extends AppModel {

/**
 * Display field
 *
 * @var string
 */
	public $displayField = 'turno';

/**
 * Validation rules
 *
 * @var array
 */
	public $validate = array(
		'turno' => array(
			'notEmpty' => array(
				'rule' => array('notEmpty'),
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
	);

	//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * belongsTo associations
 *
 * @var array
 */
	public $belongsTo = array(
		'Eleicoes' => array(
			'className' => 'Eleicoes',
			'foreignKey' => 'eleicoes_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);
}
