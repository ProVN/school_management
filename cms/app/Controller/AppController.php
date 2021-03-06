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
	 public $uses = array('Student','Country','Document','School','DocumentType','StudentInfo','Contact','Config','StudentCalendarYear','StudentCalendarSem');
	 
	 function beforeRender()
	 {
	 	$admin = $this->Session->read('SM_LOGIN');
	 	if(empty($admin) && ($this->params['action'] != 'login'))
		{
			$this->redirect('/login');
		}
	 	$this->set('db_result_mode', isset($_GET['result'])? $_GET['result']: null);
		$FRONT_END_WEBSITE_URL = Configure::read('FRONT_END_WEBSITE_URL');
		$this->set('FRONT_END_WEBSITE_URL', $FRONT_END_WEBSITE_URL);
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
	 
	 function uploadfile($source_file,$server_file_path)
	 {
		$FRONT_END_FTP_URL = Configure::read('FRONT_END_FTP_URL');
		$FRONT_END_FTP_UID = Configure::read('FRONT_END_FTP_UID');	
		$FRONT_END_FTP_PWD = Configure::read('FRONT_END_FTP_PWD');		
		$FRONT_END_FTP_ROOT = Configure::read('FRONT_END_FTP_ROOT');		
	 	$ftp_root = $FRONT_END_FTP_ROOT;
		$remote_file = $ftp_root.'app/webroot/'.$server_file_path;		
		$ftp_server = $FRONT_END_FTP_URL;
		$ftp_user_name = $FRONT_END_FTP_UID;
		$ftp_user_pass = $FRONT_END_FTP_PWD;
		$return_val = false;
		// set up basic connection
		$conn_id = ftp_connect($ftp_server);
		// login with username and password
		$login_result = ftp_login($conn_id, $ftp_user_name, $ftp_user_pass);
		// upload a file
		// ftp_delete($conn_id, $remote_file);
		echo $source_file;
		if (ftp_put($conn_id, $remote_file, $source_file, FTP_BINARY))
		 	$return_val = true;
		// close the connection
		ftp_close($conn_id);
		return $return_val;
	 }

	function randomString($length = 10) {
    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $randomString = '';
    for ($i = 0; $i < $length; $i++) {
        $randomString .= $characters[rand(0, strlen($characters) - 1)];
    }
    return $randomString;
} 
}
