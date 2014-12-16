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
	
	public $components = array('Session','RequestHandler');
	public $uses = array('Student','Country','Document','School','FeedBack','Contact','StudentCalendarYear','StudentCalendarSem','Config');
	
	function beforeRender()
	{
		if($this->params['controller'] == 'login') return;
		$student = $this->Session->read('STUDENT');
		if($student == null || empty($student)) {
			$this->set('G\'Connect Education');
			$this->redirect('/login/');
		}
		$this->set('website_title',$student['Student']['name'].' - G\'Connect Education');
		$this->set('student',$student);
		
		$contact = $this->Contact->findById(1);
		
		//Thoi khoa bieu
		$student_id = $student['Student']['id'];
		$calendar = $this->StudentCalendarYear->find('all',array('conditions'=>array('student_id'=>$student_id)));
		
		$this->set('contact',$contact);
		$this->set('calendars',$calendar);
	} 
	
	function sendMail($title, $content)
	{
		$email_port = $this->Config->find('first',array('conditions'=>array('name'=>'email_port' )));
		$email_host = $this->Config->find('first',array('conditions'=>array('name'=>'email_host')));
		$email_username = $this->Config->find('first',array('conditions'=>array('name'=>'email_username')));
		$email_password = $this->Config->find('first',array('conditions'=>array('name'=>'email_password')));
		$email_received = $this->Config->find('first',array('conditions'=>array('name'=>'email_received')));
		$email = new CakeEmail('gmail');

		// $email->smtpOptions(array(
		// 'host' => $email_host,
		// 'port' => $email_port,
		// 'username' => $email_username,
		// 'password' => $email_password,
		// ));

		$email->to($email_received['Config']['value']);
		$email->subject($title);
		$email->from ('your_user@gmail.com');
		$email->send($content);
	}
}
	