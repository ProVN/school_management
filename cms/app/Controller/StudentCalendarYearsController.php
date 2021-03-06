<?php
App::uses('AppController', 'Controller');
class StudentCalendarYearsController extends AppController {
	public function index($student_id) {			
		//TASK_FOR_THAO: Em lấy data cho $datasource nhé 	
		$datasource = array();
		$datasource = $this -> StudentCalendarYear ->  find('all',array('conditions'=>array('student_id'=>$student_id)));
		$this->set('datasource',$datasource);
		$student = $this->Student->findById($student_id);
		$this->set('student',$student);
	}

	public function add($student_id) {
		$this->set('student_id',$student_id);
		$this->prepareData();
		if (empty($this -> data)) {
			$this -> render('form');
		} else {
			if ($this->request->is('post')) {
				$data = $this->data;

	            if ($this->StudentCalendarYear->save($data)) {	
	            	$this->setAfterSave(true);
					$this -> redirect('/student_calendar_years/index/'.$student_id);
	            }
				else
	           	$this->Session->setFlash(__('Unable to add your school.'));
				$this -> render('form');
			}
		}
	}

	public function edit($id) {		
		if (!$id) {
	        throw new NotFoundException(__('Invalid school'));
	    }
	
	    $school = $this->StudentCalendarYear->findById($id);
	    if (!$school) {
	        throw new NotFoundException(__('Invalid school'));
	    }
		
		$this->set('student_id',$school['StudentCalendarYear']['student_id']);
	
	    if ($this->request->is(array('post', 'put'))) {
			$data = $this->data;

	        if ($this->StudentCalendarYear->save($data)) {
	        	$this->setAfterSave(true);
				$this->Session->setFlash(__('Your post has been updated.'));
	            $this -> redirect('/student_calendar_years/index/'.$school['StudentCalendarYear']['student_id']);
	        }
			else {
				$this->Session->setFlash(__('Unable to update your post.'));
			}
	    }
		else {
			$this -> data = $school;
			$this -> render('form');
		}			
	}

	public function delete($id) {
		$this -> StudentCalendarYear -> delete($id);
		$this -> render(false);
	}

	private function redirect_to_main_page() {
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
