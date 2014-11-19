<?php
/**
 * Static content controller.
 *
 * This file will render views from views/pages/
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

App::uses('AppController', 'Controller');

/**
 * Static content controller
 *
 * Override this controller by placing a copy in controllers directory of an application
 *
 * @package       app.Controller
 * @link http://book.cakephp.org/2.0/en/controllers/pages-controller.html
 */
class LoginController extends AppController {
	
	function beforeFilter() {
    	parent::beforeFilter();
		
		if(isset($_GET['type']) && $_GET['type'] == 2)
			$this->layout = 'login2';
		else
        	$this->layout = 'login';
  	}
	public function index(){
		if(!empty($_POST)) {
			$student_code = $_POST['student_code'];
			$password = $_POST['password'];
			$student = $this->Student->find('first',array('conditions'=>array('code'=>$student_code, 'password'=>$password)));
			
			if(!empty($student)) {
				$this->Session->write('STUDENT',$student);
				$this->redirect("/");
			} 
			else {
				$this->set('error','Mã số học viên hoặc mật khẩu không đúng.');
			}
		}
	}
	
	public function forgotpassword()
	{
		if(empty($_POST)) {
			$this->render('forgotpassword');
		}
		else {
			$this->render('forgotpasswordresult');
		}
	}
	
	public function logout(){
		$this->Session->write('STUDENT',null);
		$this->redirect('/login/');
	}
}
