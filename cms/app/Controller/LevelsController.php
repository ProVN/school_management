<?php
App::uses('AppController', 'Controller');
class LevelsController extends AppController {
	public function index() {
		$level_list = $this->Level->find('all');
		$this->set('level_list',$level_list);
	}

	public function add() {
		if (empty($this -> data)) {
			$this -> render('form');
		} else {
			$this -> Level -> save($this -> data);
			$this->setAfterSave(true);
			$this -> redirect_to_main_page();
		}
	}

	public function edit($id) {
		$level = $this -> Level -> findById($id);
		if ($level == null) {
			$this -> redirect_to_main_page();
		} else {
			if (empty($this -> data)) {
				$this -> data = $level;
				$this -> render('form');
			} else {
				$this -> Level -> save($this -> data);
				$this->setAfterSave(true);
				$this -> redirect_to_main_page();
			}
		}
	}

	public function delete($id) {
		$cnt = $this->Question->find('count',array('conditions'=>array('grade_id'=>$id)));
		if($cnt == 0)
			$this -> Level -> delete($id);
		else 
			echo 'Could not delete this level, because it is beign used by some questions';
		$this -> render(false);
	}

	public function redirect_to_main_page() {
		$this -> redirect('/levels/?result=success');
	}

}
