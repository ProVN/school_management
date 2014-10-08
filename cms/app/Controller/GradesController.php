<?php
App::uses('AppController', 'Controller');
class GradesController extends AppController {
	public function index() {
		$grade_list = $this->Grade->find('all');
		$this->set('grade_list',$grade_list);
	}

	public function add() {
		if (empty($this -> data)) {
			$this -> render('form');
		} else {
			$this -> Grade -> save($this -> data);
			$this->setAfterSave(true);
			$this -> redirect_to_main_page();
		}
	}

	public function edit($id) {
		$grade = $this -> Grade -> findById($id);
		if ($grade == null) {
			$this -> redirect_to_main_page();
		} else {
			if (empty($this -> data)) {
				$this -> data = $grade;
				$this -> render('form');
			} else {
				$this -> Grade -> save($this -> data);
				$this->setAfterSave(true);
				$this -> redirect_to_main_page();
			}
		}
	}

	public function delete($id) {
		$cnt = $this->Question->find('count',array('conditions'=>array('grade_id'=>$id)));
		if($cnt == 0)
			$this -> Grade -> delete($id);
		else 
			echo 'Could not delete this grade, because it is beign used by some questions';
		$this -> render(false);
	}

	public function redirect_to_main_page() {
		$this -> redirect('/grades/?result=success');
	}

}
