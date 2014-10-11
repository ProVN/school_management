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
	

}
