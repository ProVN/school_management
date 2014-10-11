<?php
App::uses('AppController', 'Controller');
class StudentsController extends AppController {
	public function index() {
			
		//TASK_FOR_THAO: Em lấy data cho $datasource nhé 	
		$datasource = array();
		$datasource = $this -> Student -> find('all');
		$this->set('datasource',$datasource);
	}

	public function add() {
		$this->prepareData();
		if (empty($this -> data)) {
			$this -> render('form');
		} else {
			if ($this->request->is('post')) {
	            $this->Student->create();
	            if ($this->Student->save($this->request->data)) {
	            	$this->setAfterSave(true);
					$this -> redirect_to_main_page();
	            }
				else
	           		 $this->Session->setFlash(__('Unable to add your student.'));
			}
		}
	}

	public function edit($id) {
		$this->prepareData();
		$student = $this -> Student -> findById($id);
		if ($student == null) {
			$this -> redirect_to_main_page();
		} else {
			if (empty($this -> data)) {
				$this -> data = $student;
				$this -> render('form');
			} else {
				$this -> Student -> save($this -> data);
				$this->setAfterSave(true);
				$this -> redirect_to_main_page();
			}
		}
	}

	public function delete($id) {
		$this -> Student -> delete($id);
		$this -> render(false);
	}

	private function redirect_to_main_page() {
		$this -> redirect('/students/?result=success');
	}
	
	private function prepareData()
	{
		$school_list = $this->School->find('list');
		$country_list = $this->Country->find('list');
		$this->set('school_list',$school_list);
		$this->set('country_list',$country_list);
	}

}
