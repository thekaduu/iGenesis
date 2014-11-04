<?php
App::uses('AppController', 'Controller');
/**
 * Eleicos Controller
 *
 * @property Eleico $Eleico
 * @property PaginatorComponent $Paginator
 * @property SessionComponent $Session
 */
class EleicosController extends AppController {
	public $components = array('Paginator', 'Session');

	function Cadastrar(){
		$this->set('icone','thumbs up');
		$this->set('titulo','Cadastro de Eleiçoes');
		$this->set('sub_titulo','Criar eleições para os mais diversos cargos cadastrados no sistema.');
	}

}
