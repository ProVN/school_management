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
App::uses('CakeEmail', 'Network/Email');
/**
 * Static content controller
 *
 * Override this controller by placing a copy in controllers directory of an application
 *
 * @package       app.Controller
 * @link http://book.cakephp.org/2.0/en/controllers/pages-controller.html
 */
class FeedBacksController extends AppController {

	public function post(){
		if(empty($this->data)){
			$this->redirect("/");
		}
		else {
			$this->FeedBack->save($this->data);			
			$email_port = $this->Config->find('first',array('conditions'=>array('name'=>'email_port')));
			$email_host = $this->Config->find('first',array('conditions'=>array('name'=>'email_host')));
			$email_username = $this->Config->find('first',array('conditions'=>array('name'=>'email_username')));	
			$email_password = $this->Config->find('first',array('conditions'=>array('name'=>'email_password')));		
			$email_received = $this->Config->find('first',array('conditions'=>array('name'=>'email_received')));			
			$email = new CakeEmail('gmail');
        	$email->to($email_received['Config']['value']);			
        	$email->subject($this->data['Feedback']['title']);
        	$email->from ('your_user@gmail.com');			
			$email->send($this->data['Feedback']['comment']);
			echo 'success';
			exit();
		}
	}
}
