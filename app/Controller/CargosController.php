<?php
App::uses('AppController', 'Controller');
/**
 * Cargos Controller
 *
 * @property Cargo $Cargo
 * @property PaginatorComponent $Paginator
 * @property SessionComponent $Session
 */
class CargosController extends AppController {

/**
 * Components
 *
 * @var array
 */
	public $components = array('Paginator', 'Session');

	public function cadastrar(){
		$this->set('icone','briefcase');
		$this->set('titulo','Cadastro de Cargos');
		$this->set('sub_titulo','Cargos para a eleição');	

		if(!empty($this->request->data)){
			$salvou = $this->Cargo->salvaCargo($this->request->data);
			$mensagem = $salvou ? 'Cargo cadastrado com sucesso!' : 'Ocorreu um erro ao cadastrar o cargo. Por favor tente novamente.';
			$this->Session->SetFlash($mensagem);
			unset($this->request->data);
		}
	}
}
