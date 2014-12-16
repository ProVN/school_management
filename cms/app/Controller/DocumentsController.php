<?php
App::uses('AppController', 'Controller');
class DocumentsController extends AppController {
	public function index($student_id) {
		$datasource = array();
		$datasource = $this -> Document -> find('all' ,array('conditions' => array('Document.student_id' => $student_id)));
		$this->set('datasource',$datasource);
		$this->set('student_id',$student_id);
	}

	public function add($student_id, $doc_type) {
		$this->prepareData();
		if (empty($this -> data)) {
			$this -> set('student_id',$student_id);
			$this -> render('form');
		} else {
			if ($this->request->is('post')) {
				$data = $this->data;
				$data['Document']['doc_type'] = $doc_type;
				$file = $data['Document']['file_url'];
		     	if($file['error'] == 0) {
					//$file_ext = pathinfo($file['name'], PATHINFO_EXTENSION);
					$file_name = $file['name'];
					if($this->uploadfile($file['tmp_name'],'upload/documents/'.$file_name)){
						$data['Document']['url'] = $file_name;
					}					
				}
				
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
			$this->set('student_id',$document['Document']['student_id']);
			if (empty($this -> data)) {
				$this -> data = $document;
				$this -> render('form');
			} else {
				$data = $this->data;
				$file = $data['Document']['file_url'];
				
				if($file['error'] == 0) {
					//$file_ext = pathinfo($file['name'], PATHINFO_EXTENSION);
					$file_name = $file['name'];
					if($this->uploadfile($file['tmp_name'],'upload/documents/'.$file_name)){
						$data['Document']['url'] = $file_name;
					}					
				}
				$this -> Document -> save($data);
				$this->setAfterSave(true);
				$this -> redirect_to_main_page($document['Document']['student_id']);
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
		$doc_type_list = array('1'=>'Trạng thái hồ sơ', '2'=>'Tải xuống');		
		$this->set('doc_type_list',$doc_type_list);
	}

}
