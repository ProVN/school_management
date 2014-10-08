<?php
App::uses('AppController', 'Controller');
class ExaminationsController extends AppController {
		
	public function index()
	{
		
	}	
	
	public function add($examination_rule_id)
	{
		$this->Session->write('QUESTION_GENERATE_TMP',null);
		$this->Session->write('QUESTION_GENERATE_DATA',null);
		$examination_rule_level_list = $this->ExaminationRuleLevel->find('all',array('conditions'=>array('examination_rule_id'=>$examination_rule_id)));
		$this->set('examination_rule_level_list',$examination_rule_level_list);
		$this->prepareData();
		if(!empty($this->data)) {
			$error_msg = "";
			$category_id = $this->data['Examination']['category_id'];
			$category = $this->Category->findById($category_id);
			foreach ($this->data['ExaminationRuleLevel'] as $key => $item) {
				$cnt = $this->Question->find('count',array('conditions'=>array('level_id'=>$item['level_id'],'category_id'=>$category_id)));
				$level = $this->Level->findById($item['level_id']);
				if($cnt < $item['num_of_question']) {
					$error_msg.= $category['Category']['name'].' only has '.$cnt. ' question(s) in level '.$level['Level']['name'].'<br/>';
				}
			}
			if($error_msg != "") 
				$this->set('error_msg',$error_msg);
			else {
				$question_list = array();
				foreach ($this->data['ExaminationRuleLevel'] as $key => $item) {
					if($item['num_of_question'] > 0){
						$result = $this->Question->find('all',array('conditions'=>array('level_id'=>$item['level_id'],'category_id'=>$category_id),'order'=>'rand()','limit'=>$item['num_of_question']));
						$question_list = array_merge($question_list,$result);
					}
				}
				$this->Session->write('QUESTION_GENERATE_TMP',$question_list);
				$this->Session->write('QUESTION_GENERATE_DATA',$this->data);
				$this->redirect('/examinations/preview/');
			}
		}
		
		$this->render('form');
	}

	public function preview() 
	{
		$this->set('datasource',$this->Session->read('QUESTION_GENERATE_TMP'));
	}
	
	public function save() 
	{
		$this->redirect('/examinations/');
		$data = $this->Session->read('QUESTION_GENERATE_DATA');
		$question_list = array();
		foreach ($data['ExaminationRuleLevel'] as $key => $item) {
			if($item['num_of_question'] > 0){
				$result = $this->Question->find('all',array('conditions'=>array('level_id'=>$item['level_id'],'category_id'=>$category_id),'order'=>'rand()','limit'=>$item['num_of_question']));
				$question_list = array_merge($question_list,$result);
			}
		}
		$this->Examination->save($data);
		$last_id = $this->Examination->getLastInsertID();
	}
	
	private function prepareData()
	{
		$grade_list = $this->Grade->find('list');
		$level_list = $this->Level->find('list');
		$category_list = $this->Category->find('list');
		
		$this->set('grade_list',$grade_list);
		$this->set('level_list',$level_list);
		$this->set('category_list',$category_list);
	}
}
