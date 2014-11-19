<?php
App::uses('AppController', 'Controller');
class StudentsController extends AppController {
	public function index($country = 0, $school = 0) {			
		//TASK_FOR_THAO: Em lấy data cho $datasource nhé 	
		$datasource = array();
		
		$conditions = array();
		if($country > 0) 
			$conditions['country_id'] = $country;		
		if($school >0 )
			$conditions['school_id'] = $school;
		if(count($conditions) == 0)
			$datasource = $this -> Student -> find('all');
		else 
			$datasource = $this -> Student -> find('all', array('conditions'=>$conditions));
		$this->set('datasource',$datasource);

		$schools = $this->School->find('list');
		$citys = $this->Country->find('list');
		
		$this->set('schools',$schools);
		$this->set('cities',$citys);
		
		$this->set('school',$school);
		$this->set('country',$country);
	}

	public function add() {
		$this->prepareData();
		if (empty($this -> data)) {
			$this -> render('form');
		} else {
			if ($this->request->is('post')) {
	            $this->Student->create();
				$student = $this->data;
				$file1 = $_FILES['file1'];
				if($file1['error'] == 0) {
					$file_ext = pathinfo($file1['name'], PATHINFO_EXTENSION);
					$file_name = $student['Student']['code'].$this->randomString().'.'.$file_ext;
					if($this->uploadfile($file1['tmp_name'],'upload/img/students/'.$file_name)){
						$student['Student']['image_small'] = $file_name;
					}					
				}
				
				$file2 = $_FILES['file2'];
				if($file2['error'] == 0) {
					$file_ext = pathinfo($file2['name'], PATHINFO_EXTENSION);
					$file_name = $student['Student']['code'].$this->randomString().'.'.$file_ext;
					if($this->uploadfile($file2['tmp_name'],'upload/img/students/'.$file_name)){
						$student['Student']['image_large'] = $file_name;
					}						
				}
				
	            if ($this->Student->save($student)) {
	            	$this->setAfterSave(true);
					
					//Insert student info
					$this->StudentInfo->deleteAll(array('student_id'=>$this->Student->getLastInsertID()));					
					foreach ($student['StudentInfo']['name'] as $key12 => $student_info_name) {						
						if($student_info_name != "") {
							$studentInfo = array('StudentInfo' => array(
																		'id' => null,
																		'student_id'=>$this->Student->getLastInsertID(),
																		'name'=>$student_info_name,
																		'value'=>$student['StudentInfo']['value'][$key12],
																		)
												);
							$this->StudentInfo->save($studentInfo);
						}
					}		
						
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
				$student = $this->data;
				pr($student);
				$file1 = $_FILES['file1'];
				if($file1['error'] == 0) {
					$file_ext = pathinfo($file1['name'], PATHINFO_EXTENSION);
					$file_name = $student['Student']['code'].$this->randomString().'.'.$file_ext;
					if($this->uploadfile($file1['tmp_name'],'upload/img/students/'.$file_name)){
						$student['Student']['image_small'] = $file_name;
					}					
				}
				
				$file2 = $_FILES['file2'];
				if($file2['error'] == 0) {
					$file_ext = pathinfo($file2['name'], PATHINFO_EXTENSION);
					$file_name = $student['Student']['code'].$this->randomString().'.'.$file_ext;
					if($this->uploadfile($file2['tmp_name'],'upload/img/students/'.$file_name)){
						$student['Student']['image_large'] = $file_name;
					}						
				}
				
				$this -> Student -> save($student);
				
				//Insert student info
					$this->StudentInfo->deleteAll(array('student_id'=>$id));					
					foreach ($student['StudentInfo']['name'] as $key12 => $student_info_name) {						
						if($student_info_name != "") {
							$studentInfo = array('StudentInfo' => array(
																		'id' => null,
																		'student_id'=>$id,
																		'name'=>$student_info_name,
																		'value'=>$student['StudentInfo']['value'][$key12],
																		)
												);
							$this->StudentInfo->save($studentInfo);
						}
					}					
					
					$this -> redirect_to_main_page();
				
				
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
