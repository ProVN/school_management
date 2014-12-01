<?php
App::uses('AppController', 'Controller');
class SchoolsController extends AppController {
	public function index() {

		//TASK_FOR_THAO: Em lấy data cho $datasource nhé
		$datasource = array();
		$datasource = $this -> School -> find('all');
		$this -> set('datasource', $datasource);
	}

	public function add() {
		$this -> prepareData();
		if (empty($this -> data)) {
			$this -> render('form');
		} else {
			if ($this -> request -> is('post')) {
				$data = $this -> data;
				$file2 = $data['School']['logo_file'];

				if ($file2['error'] == 0) {
					$file_ext = pathinfo($file2['name'], PATHINFO_EXTENSION);
					$file_name = $this -> randomString() . '.' . $file_ext;
					if ($this -> uploadfile($file2['tmp_name'], 'upload/img/schools/' . $file_name)) {
						$data['School']['logo'] = $file_name;
					}
				}

				if ($this -> School -> save($data)) {
					$this -> setAfterSave(true);
					$this -> redirect_to_main_page();
				} else
					$this -> Session -> setFlash(__('Unable to add your school.'));
				$this -> render('form');
			}
		}
	}

	public function edit($id) {
		if (!$id) {
			throw new NotFoundException(__('Invalid school'));
		}

		$school = $this -> School -> findById($id);
		if (!$school) {
			throw new NotFoundException(__('Invalid school'));
		}

		if ($this -> request -> is(array('post', 'put'))) {
			$data = $this -> data;

			$file2 = $data['School']['logo_file'];

			if ($file2['error'] == 0) {
				$file_ext = pathinfo($file2['name'], PATHINFO_EXTENSION);
				$file_name = $this -> randomString() . '.' . $file_ext;
				if ($this -> uploadfile($file2['tmp_name'], 'upload/img/schools/' . $file_name)) {
					$data['School']['logo'] = $file_name;
					echo $file_name;
				}
				echo $file_name;
			}

			if ($this -> School -> save($data)) {
				$this -> setAfterSave(true);
				$this -> Session -> setFlash(__('Your post has been updated.'));
				$this -> redirect_to_main_page();
			} else {
				$this -> Session -> setFlash(__('Unable to update your post.'));
			}
		} else {
			$this -> data = $school;
			$this -> render('form');
		}
	}

	public function delete($id) {
		$this -> School -> delete($id);
		$this -> render(false);
	}

	private function redirect_to_main_page() {
		return $this -> redirect(array('action' => 'index'));
	}

	private function prepareData() {
		$school_list = $this -> School -> find('all');
		$country_list = $this -> School -> find('all');
		$this -> set('school_list', $school_list);
		$this -> set('country_list', $country_list);
	}

}
