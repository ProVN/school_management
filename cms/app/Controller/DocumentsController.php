<?php
App::uses('AppController', 'Controller');
class DocumentsController extends AppController {
	public function index($student_id) {
		$datasource = array();
		$datasource = $this -> Document -> find('all' ,array('conditions' => array('Document.student_id' => $student_id)));
		$this->set('datasource',$datasource);
		$this->set('student_id',$student_id);
	}

	public function add($student_id) {
		$this->prepareData();
		if (empty($this -> data)) {
			$this -> set('student_id',$student_id);
			$this -> render('form');
		} else {
			if ($this->request->is('post')) {
				$data = $this->data;
				$file = $data['Document']['file_url'];
		     	move_uploaded_file($data['Document']['file_url']['tmp_name'], WWW_ROOT . 'upload/' . $data['Document']['file_url']['name']);
				$data['Document']['url'] = $data['Document']['file_url']['name'];
	            if ($this->Document->save($data)) {
	            	$this->setAfterSave(true);
					$this -> redirect_to_main_page($student_id);
	            }
				else
	           		 $this->Session->setFlash(__('Unable to add your document.'));
			}
		}
	}

	public function edit($id) {
		$this->prepareData();
		$document = $this -> Document -> findById($id);
		if ($document == null) {
			$this -> redirect_to_main_page();
		} else {
			if (empty($this -> data)) {
				$this -> set('student_id',$id);
				$this -> data = $document;
				$this -> render('form');
			} else {
				$data = $this->data;
				$file = $data['Document']['file_url'];
		     	move_uploaded_file($data['Document']['file_url']['tmp_name'], WWW_ROOT . 'upload/' . $data['Document']['file_url']['name']);
				$data['Document']['url'] = $data['Document']['file_url']['name'];
				$this -> Document -> save($data);
				$this->setAfterSave(true);
				$this -> redirect_to_main_page($id);
			}
		}
	}

	public function delete($id) {
		$this -> Document -> delete($id);
		$this -> render(false);
	}

	private function redirect_to_main_page($id) {
		$this -> redirect('/documents/index/'.$id);
	}
	
	private function prepareData()
	{
		$doc_type_list = $this -> Document -> DocumentType -> find('list'); 
		$this->set('doc_type_list',$doc_type_list);
	}

}
