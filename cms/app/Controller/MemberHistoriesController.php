<?php
App::uses('AppController', 'Controller');
class MemberHistoriesController extends AppController {
	public function index($member_id) {
		$data= $this->MemberHistory->find('all',array('conditions'=>array('member_id'=>$member_id)));
		$num_of_correct = 0;
		$num_of_wrong = 0;
		$num_of_passed = 0;
		$num_of_failed = 0;
		
		foreach ($data as $key => $value) {
			$num_of_correct += $value['MemberHistory']['num_of_correct'];
			$num_of_wrong += $value['MemberHistory']['num_of_wrong'];
			if($value['MemberHistory']['is_passed']=='1') 
				$num_of_passed++;
			else 
				$num_of_failed++;
		}
		
		
		$this->set('num_of_correct',$num_of_correct);
		$this->set('num_of_wrong',$num_of_wrong);
		$this->set('num_of_passed',$num_of_passed);
		$this->set('num_of_failed',$num_of_failed);
		
	}
}
