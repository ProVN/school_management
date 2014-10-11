<?php
App::uses('AppController', 'Controller');
class CountriesController extends AppController {
	public function index() {
			
		//TASK_FOR_THAO: Em lấy data cho $datasource nhé 	
		$datasource = array();
		$datasource = $this -> Country ->  find('all');	
		$this->set('datasource',$datasource);
	}

	public function add() {
		$this->prepareData();
		if (empty($this -> data)) {
			$this -> render('form');
		} else {
			if ($this->request->is('post')) {
	          $this->Country->create();
	          if ($this->Country->save($this->request->data)) {
	          	$this->setAfterSave(true);
				$this -> redirect_to_main_page();
            }
			  else
	          	$this->Session->setFlash(__('Unable to add your country.'));
			}
		}
	}

	public function edit($id) {
		$this->prepareData();
		$country = $this -> Country -> findById($id);
		if ($country == null) {
			$this -> redirect_to_main_page();
		} else {
			if (empty($this -> data)) {
				$this -> data = $country;
				$this -> render('form');
			} else {
				$this -> Country -> save($this -> data);
				$this->setAfterSave(true);
				$this -> redirect_to_main_page();
			}
		}
	}

	public function delete($id) {
		$this -> Country -> delete($id);
		$this -> render(false);
	}

	private function redirect_to_main_page() {
		//$this -> redirect('/students/?result=success');
		return $this->redirect(array('action' => 'index'));
	}
	
	private function prepareData()
	{
		$school_list = $this->School->find('all');
		$country_list = $this->School->find('all');
		$this->set('school_list',$school_list);
		$this->set('country_list',$country_list);
	}

}
