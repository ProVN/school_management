<?php
App::uses('AppController', 'Controller');
class CategoriesController extends AppController {
	public function index() {
		$cateogories = $this -> Category -> find('all');
		$this -> set('categories', $cateogories);
		$this->setAfterSave(false);
	}

	public function add() {
		if (empty($this -> data)) {
			$this -> render('form');
		} else {
			$this -> Category -> save($this -> data);
			$this->setAfterSave(true);
			$this -> redirect_to_main_page();
		}
	}

	public function edit($id) {
		$category = $this -> Category -> findById($id);
		if ($category == null) {
			$this -> redirect_to_main_page();
		} else {
			if (empty($this -> data)) {
				$this -> data = $category;
				$this -> render('form');
			} else {
				$this -> Category -> save($this -> data);
				$this->setAfterSave(true);
				$this -> redirect_to_main_page();
			}
		}
	}

	public function delete($id) {
		$this -> Category -> delete($id);
		$this -> render(false);
	}

	public function redirect_to_main_page() {
		$this -> redirect('/categories/?result=success');
	}

}
