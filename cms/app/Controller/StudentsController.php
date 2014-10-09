<?php
App::uses('AppController', 'Controller');
class StudentsController extends AppController {
	public function index() {
			
		//TASK_FOR_THAO: Em lấy data cho $datasource nhé 	
		$datasource = array();
		
		$this->set('datasource',$datasource);
	}

	public function add() {
		$this->prepareData();
		if (empty($this -> data)) {
			$this -> render('form');
		} else {
			$this -> Student -> save($this -> data);
			$this->setAfterSave(true);
			$this -> redirect_to_main_page();
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
		$school_list = $this->School->find('all');
		$country_list = $this->School->find('all');
		$this->set('school_list',$school_list);
		$this->set('country_list',$country_list);
	}

}
