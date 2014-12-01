<?php
App::uses('AppController', 'Controller');
class StudentCalendarSemsController extends AppController {
	public function index($student_calendar_year_id) {			
		//TASK_FOR_THAO: Em lấy data cho $datasource nhé 	
		$datasource = array();
		$datasource = $this -> StudentCalendarSem ->  find('all',array('conditions'=>array('student_calendar_year_id'=>$student_calendar_year_id)));
		$this->set('datasource',$datasource);
		$year = $this->StudentCalendarYear->findById($student_calendar_year_id);
		$this->set('year',$year);
		$student = $this->Student->findById($year['StudentCalendarYear']['student_id']);
		$this->set('student',$student);
	}

	public function add($student_calendar_year_id) {
		$this->set('student_calendar_year_id',$student_calendar_year_id);
		$this->prepareData();
		if (empty($this -> data)) {
			$this -> render('form');
		} else {
			if ($this->request->is('post')) {
				$data = $this->data;

	            if ($this->StudentCalendarSem->save($data)) {	
	            	$this->setAfterSave(true);
					$this -> redirect('/student_calendar_sems/index/'.$student_calendar_year_id);
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
	
	    $school = $this->StudentCalendarSem->findById($id);
	    if (!$school) {
	        throw new NotFoundException(__('Invalid school'));
	    }
		
		$this->set('student_calendar_year_id',$school['StudentCalendarSem']['student_calendar_year_id']);
	
	    if ($this->request->is(array('post', 'put'))) {
			$data = $this->data;

	        if ($this->StudentCalendarSem->save($data)) {
	        	$this->setAfterSave(true);
				$this->Session->setFlash(__('Your post has been updated.'));
	            $this -> redirect('/student_calendar_sems/index/'.$school['StudentCalendarSem']['student_calendar_year_id']);
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
		$this -> StudentCalendarSem -> delete($id);
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
