<?php
App::uses('AppController', 'Controller');
/**
 * Eleicos Controller
 *
 * @property Eleico $Eleico
 * @property PaginatorComponent $Paginator
 * @property SessionComponent $Session
 */
class MembrosController extends AppController {
	public $components = array('Paginator', 'Session');
	var $uses = array('PessoaFisica');
	function index(){

	}

	function cadastrar(){
		$this->set('icone','user');
		$this->set('titulo','Cadastro de Membros');
		$this->set('sub_titulo','Atualize seu Hall de membros');

		if($this->request->data){
			$salvou = $this->PessoaFisica->salvaPessoaFisica($this->request->data);
			$mensagem = $salvou ? 'Membro Cadastrado com Sucesso!' : 'Ocorreu um erro e não foi possível salvar o membro';
			$this->Session->setFlash($mensagem);
			unset($this->request->data);
		}
	}
}

