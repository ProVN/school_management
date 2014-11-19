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
	public $uses = array('Student','Country','Document','School','FeedBack','Contact');
	
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
		$this->set('contact',$contact);
	} 
}
