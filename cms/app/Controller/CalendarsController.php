<?php
App::uses('AppController', 'Controller');
class CalendarsController extends AppController {
	public function index($student_id) {
		if(empty($this->data)) {
			$calendar = $this->Calendar->find('first',array('conditions'=>array('student_id'=>$student_id)));
			if(!empty($calendar)) 
				$this->data = $calendar;
		}
		else {
			$this->Calendar->save($this->data);
		}
		$this->set('student_id',$student_id);
	}
}
