<?php
/**
 * CandidatoFixture
 *
 */
class CandidatoFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false, 'key' => 'primary'),
		'pessoa_fisicas_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false, 'key' => 'index'),
		'eleicoes_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false, 'key' => 'index'),
		'cargos_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false, 'key' => 'index'),
		'indexes' => array(
			'PRIMARY' => array('column' => 'id', 'unique' => 1),
			'fk_pessoa_fisicas_candidato' => array('column' => 'pessoa_fisicas_id', 'unique' => 0),
			'fk_eleicoes_candidato' => array('column' => 'eleicoes_id', 'unique' => 0),
			'fk_cargo_candidato' => array('column' => 'cargos_id', 'unique' => 0)
		),
		'tableParameters' => array('charset' => 'latin1', 'collate' => 'latin1_swedish_ci', 'engine' => 'InnoDB')
	);

/**
 * Records
 *
 * @var array
 */
	public $records = array(
		array(
			'id' => 1,
			'pessoa_fisicas_id' => 1,
			'eleicoes_id' => 1,
			'cargos_id' => 1
		),
	);

}
