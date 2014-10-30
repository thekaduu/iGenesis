<?php
/**
 * Application model for CakePHP.
 *
 * This file is application-wide model file. You can put all
 * application-wide model-related methods here.
 *
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       app.Model
 * @since         CakePHP(tm) v 0.2.9
 * @license       http://www.opensource.org/licenses/mit-license.php MIT License
 */

App::uses('Model', 'Model');

/**
 * Application model for Cake.
 *
 * Add your application-wide methods in the class below, your models
 * will inherit them.
 *
 * @package       app.Model
 */
class AppModel extends Model {



	//Métodos @protected
	/**
	*	Formata uma string de data para o formato desejado
	*	@author Carlos Eduardo
	*	@param string $data
	*	@param string $formato (sql,br)
	*	@return string $data
	*	@access protected
	*/
	protected function formataData($data,$formato = 'sql'){
		if(empty($data)){
			throw new LogicException("Parâmetro data é obrigatório", 1);			
		}
		switch ($formato) {
			case 'sql':
				$data = split('/', $data);				
				$data = $data[2].'-'.$data[1].'-'.$data[0];
				break;
			case 'br':
				$data = split('-', $data);				
				$data = $data[2].'/'.$data[1].'/'.$data[0];
				break;
			default:
				throw new LogicException("Parâmetro formato não é válido", 1);				
				break;
		}
		return $data;
	}
}
