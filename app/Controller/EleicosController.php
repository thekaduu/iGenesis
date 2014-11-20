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
	var $uses = array('Cargo','Eleico');

	function Cadastrar(){
		$this->set('icone','thumbs up');
		$this->set('titulo','Cadastro de Eleições');
		$this->set('sub_titulo','Criar eleições para os mais diversos cargos cadastrados no sistema.');
		$cargos = $this->Cargo->listaTodos();

	}

	/**
	*	Service para salvar os Dados da Eleição Vinculando já os cargos a ela
	*   @author Carlos Eduardo Lima <carloseduardolbraz@gmail.com>
	*	@return bool
	*/
	function ServiceSalvaEleicao(){
		$this->autoRender = false;
		Configure::write('debug',2);
		$array = [];
		foreach ($this->data as $salvar) {
			$array['Eleico'] = $salvar['Eleico'];
			unset($array['Eleico']['id']);
			$array['EleicoesCargo'] = $salvar['EleicoesCargo'];
		}
		
		return $this->Eleico->saveAssociated($array);		
	}

}
