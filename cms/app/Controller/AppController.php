<?php
/**
 * Application level Controller
 *
 * This file is application-wide controller file. You can put all
 * application-wide controller-related methods here.
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
 * @package       app.Controller
 * @since         CakePHP(tm) v 0.2.9
 * @license       http://www.opensource.org/licenses/mit-license.php MIT License
 */

App::uses('Controller', 'Controller');

/**
 * Application Controller
 *
 * Add your application-wide methods in the class below, your controllers
 * will inherit them.
 *
 * @package		app.Controller
 * @link		http://book.cakephp.org/2.0/en/controllers.html#the-app-controller
 */
class AppController extends Controller {
	 public $components = array('DebugKit.Toolbar','Session','RequestHandler');
	 public $uses = array('Member','Question','Answer','Level','Grade','Category','ExaminationRule','ExaminationRuleLevel','ExaminationRuleGrade','MemberHistory');
	 
	 function beforeRender()
	 {
	 	$this->set('db_result_mode', isset($_GET['result'])? $_GET['result']: null);
	 }
	 
	 function afterRender()
	 {
	 	if($this->action == 'index'){
	 		$this->Session->write('AFTER_SAVED',false);
		}
	 }
	 
	 function generateRandomString($length = 10) 
	 {
    	$characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    	$randomString = '';
    	for ($i = 0; $i < $length; $i++) {
        	$randomString .= $characters[rand(0, strlen($characters) - 1)];
    	}
    	return $randomString;
	 }
	 
	 function setAfterSave($value) {
		$this->Session->write('AFTER_SAVED',$value);
	 }	 
}
