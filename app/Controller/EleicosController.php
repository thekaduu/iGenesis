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

	function add(){
		$this->autoRender = false;
		debug($this->data);
	}

}
