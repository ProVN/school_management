<?php
App::uses('AppController', 'Controller');
class AdministratorsController extends AppController {
	public function index() {	
		$datasource = array();
		$datasource = $this -> Administrator ->  find('all');	
		$this->set('datasource',$datasource);
	}

	public function add() {
		if (empty($this -> data)) {
			$this -> render('form');
		} else {
			if ($this->request->is('post')) {
	          $this->Administrator->create();
	          if ($this->Administrator->save($this->request->data)) {
	          	$this->setAfterSave(true);
				$this -> redirect_to_main_page();
            }
			  else
	          	$this->Session->setFlash(__('Unable to add.'));
			}
		}
	}

	public function edit($id) {
		$administrator = $this ->Administrator->findById($id);
		if ($administrator == null) {
			$this -> redirect_to_main_page();
		} else {
			if (empty($this -> data)) {
				$this -> data = $administrator;
				$this -> render('form');
			} else {
				$this -> Administrator -> save($this -> data);
				$this->setAfterSave(true);
				$this -> redirect_to_main_page();
			}
		}
	}

	public function delete($id) {
		$this -> Administrator -> delete($id);
		$this -> render(false);
	}

	private function redirect_to_main_page() {
		//$this -> redirect('/students/?result=success');
		return $this->redirect(array('action' => 'index'));
	}
	
	public function logout()
	{
		$this->Session->write('SM_LOGIN',null);
		$this->redirect('/login');
	}
	
	public function login()
	{
		$this->layout='empty';
		$err_msg = "Xin vui lòng đăng nhập";
		if(!empty($_POST))
		{
			$username = $_POST['username'];
			$password = $_POST['password'];
			
			$data = $this->Administrator->find('first',array('conditions'=>array('username'=>$username, 'password'=>$password)));
			
			if(!empty($data)) {
				$this->Session->write('SM_LOGIN',$data);
				$this->redirect('/');
			}
			else {
				$err_msg = "Tên đăng nhập hoặc mật khẩu không đúng";
					
			}
		}
		$this->set('err_msg',$err_msg);
	}
}
