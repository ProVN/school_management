<?php
App::uses('AppController', 'Controller');
class WebSvcController extends AppController {
	public $components = array('RequestHandler');
	public $uses = array('Category','Examination','UserHistory','AuthToken','Answer','ExaminationQuestion','Question');
	var $jsonData;
	var $auth_token;
	var $currentMember;
	
	public function getAuthToken()
	{
		if(isset($_GET['ip']) && isset($_GET['user'])){
			$ip_address= $_GET['ip'];
			$facebook = $_GET['user'];
			$member_id = 0;
			
			//Determine the member
			$member = $this->Member->find('first',array('conditions'=>array('facebook'=>$facebook)));
			if(empty($member)){
				$member = array('Member'=>array('facebook'=>$facebook,'grade_id'=>1));
				$this->Member->save($member);
				$member_id = $this->Member->getLastInsertID();
			}
			else {
				$member_id = $member['Member']['id'];
			}
			
			$token = $this->AuthToken->find('first',array('conditions'=>array('member_id'=>$member_id, 'ip_address'=>$ip_address)));
			if(empty($token)){
				$newToken = $this->generateRandomString(50);
				$token = array('AuthToken'=>array('token'=>$newToken,'last_request_time'=>date('Y-m-d H-i-s'),'ip_address'=>$ip_address,'member_id'=>$member_id));
				$this->AuthToken->save($token);
				$this->jsonData = array('authToken'=>$newToken);
			}
			else {
				$this->jsonData = array('authToken'=>$token['AuthToken']['token']);
			}
		}
		$this->printJsonData();
	}
	
	/**************************************************************
	 * CATEGORIES
	 *************************************************************/
	public function categories($id = null)
	{
		if($id) {
			$this->jsonData = $this->Category->findById($id);
		}
		else
			$this->jsonData = $this->Category->find('all'); 
		$this->printJsonData();
	}
	
	/**************************************************************
	 * EXAMINATIONS
	 *************************************************************/	
	public function examinations($category_id)
	{
		$member = $this->currentMember;
		$examinationRuleGrade = $this->ExaminationRuleGrade->find('first',array('conditions'=>array('grade_id'=>$member['Member']['grade_id']),'order'=>
		'rand()'));
		$examination_rule_id = $examinationRuleGrade['ExaminationRuleGrade']['examination_rule_id'];
		$examination_rule = $this->ExaminationRule->findById($examination_rule_id);
		
		$question_list = array();
		foreach($examination_rule['ExaminationRuleLevel'] as $examination_rule_level) {
			$questions = $this->Question->find('all',
											array(
												'conditions'=>array(
																	'category_id'=>$category_id,
																	'level_id' => $examination_rule_level['level_id']),
																	
												'order' => 'rand()',
												'limit'	=> $examination_rule_level['num_of_question'],				
												));
			$question_list = array_merge($questions, $question_list);
		}
		
		$this->jsonData = array('examination_rule_id'=>$examination_rule_id,'data'=>$question_list);
		$this->printJsonData();		
	}
	
	
	public function submit_examination()
	{
					
		if(!isset($_POST['answerString']) || !isset($_POST['examination_rule_id'])) {
			$this->jsonData = 'You must provide answerString and examination_rule_id';
			$this->printJsonData();
			return;
		}
		
		$answerString = $_POST['answerString']; 
		$examination_rule_id = $_POST['examination_rule_id'];
		
		$answer_id_list = explode(',', $answerString);
		$answer_list = $this->Answer->find('all', array('conditions'=>array('Answer.id'=>$answer_id_list)));
		$number_of_correct = 0;
		$number_of_wrong = 0;
		$isPass = false;
		foreach ($answer_list as $key => $value) {
			if($value['Answer']['is_right_answer'] == '1')
				$number_of_correct++;
			else 
				$number_of_wrong++; 	
		}
		
		if($number_of_correct / ($number_of_wrong + $number_of_correct) * 100 > 60) {
			$isPass = true;
		}
		$member_id = $this->currentMember['Member']['id']; 
		
		$data = array('MemberHistory'=>array(
											'member_id'				=>$member_id,
											'examination_rule_id'	=>$examination_rule_id,
											'num_of_correct'		=>$number_of_correct,
											'num_of_wrong'			=>$number_of_wrong,
											'is_passed'				=>$isPass,
											'submit_time'			=>date('Y-m-d h:i:s')									
		
		));
		$this->MemberHistory->save($data);
		
		$this->jsonData = array('numer_of_correct'=>$number_of_correct, 'number_of_wrong'=>$number_of_wrong,'isPass'=>true,'data'=>$answer_list);
		$this->printJsonData();
	}
	
	/**************************************************************
	 * EXAMINATIONS_QUESTION
	 *************************************************************/
	public function examination_questions($exam_id=null)
	{
		if($exam_id)
			$this->jsonData = $this->ExaminationQuestion->find('all',array('conditions'=>array('examination_id'=>$exam_id)));
		$this->printJsonData();		
	}
	
	
	/**************************************************************
	 * QUESTIONS
	 *************************************************************/
	public function questions($id=null)
	{
		if($id)
			$this->jsonData = $this->Question->findById($id);
		$this->printJsonData();		
	}
	
	/**************************************************************
	 * USER_HISTORIES
	 *************************************************************/	
	public function user_histories($user_id = null, $user_history_id = null)
	{
		if($user_id)
		{
			if($user_history_id)
				$this->jsonData = $this->UserHistory->findById($id);
			else 
				$this->jsonData = $this->UserHistory->find('all',array('conditions'=>array('user_id'=>$user_id)));
		}
		$this->printJsonData();
	}	
	/**************************************************************
	 * COMMON FUNCTIONS
	 *************************************************************/
	public function beforeFilter()
	{
		$hasPermission = FALSE;
		
		if(isset($_GET['authToken'])) 
		{
			$authtoken = $_GET['authToken'];
			$this->auth_token = $this->AuthToken->find('first',array('conditions'=>array('token'=>$authtoken)));
			if($this->auth_token) {
				$this->auth_token['AuthToken']['last_request_time'] = date('Y-m-d H-i-s');
				$this->AuthToken->save($this->auth_token);
				$this->currentMember = $this->Member->findById($this->auth_token['AuthToken']['member_id']);
				$hasPermission = TRUE;
			}
		}
		
		if($hasPermission == FALSE && $this->action != 'getAuthToken')
		{
			echo 'Permission denied';
			exit();		
		}
	}
	
	public function printJsonData()
	{
		if($this->jsonData == null)
			$this->jsonData = array('error'=>'Invalid request');
	 	$item = $this->jsonData;
	 	$this->set(compact('item'));
		$this->set('_serialize','item');		
		$this->render(FALSE);
	}	
}
