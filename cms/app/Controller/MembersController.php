<?php
App::uses('AppController', 'Controller');
class MembersController extends AppController {
	public function index() {
		$members = $this->Member->find('all');
		$this->set('members',$members);
	}

	public function edit($id) {
		$grade_list = $this->Grade->find('list');
		$this->set('grade_list',$grade_list);
		$member = $this -> Member -> findById($id);
		if ($member == null) {
			$this -> redirect_to_main_page();
		} else {
			if (empty($this -> data)) {
				$this -> data = $member;
				$this -> render('form');
			} else {
				$this -> Member -> save($this -> data);
				$this->setAfterSave(true);
				$this -> redirect_to_main_page();
			}
		}
	}

	public function redirect_to_main_page() {
		$this -> redirect('/members/?result=success');
	}

}
