<?php
App::uses('AppController', 'Controller');
class ExaminationRulesController extends AppController {
	public function index() {
		$examination_rule_list = $this -> ExaminationRule -> find('all');
		
		foreach ($examination_rule_list as $key => $examination_rule) {
			$rule_list = "";
			foreach ($examination_rule['ExaminationRuleGrade']  as $key1 => $value1) {
				$grade = $this->Grade->findById($value1['grade_id']);
				if($rule_list != "") $rule_list.=", ";
				$rule_list .= $grade['Grade']['name'];
			}
			$examination_rule_list[$key]['rule_list'] = $rule_list;
		}
		$this -> set('examination_rule_list', $examination_rule_list);
		$this->setAfterSave(false);
	}

	public function add() {
		$this->prepareData();
		if (empty($this -> data)) {
			$this -> render('form');
		} else {
			$this -> ExaminationRule -> save($this -> data);
			$examination_rule_levels = $this->data['ExaminationRuleLevel'];
			$lastId = $this->ExaminationRule->getLastInsertID();
			foreach($examination_rule_levels as $key => $rule_level) {
				if($rule_level['num_of_question'] == '') unset($examination_rule_levels[$key]);
				else $examination_rule_levels[$key]['examination_rule_id'] = $lastId;
			}
			$this -> ExaminationRuleLevel ->saveMany($examination_rule_levels);
			
			$ruleGrade = array();
				foreach ($this->data['grade_list'] as $key => $value) {
					
					$ruleGrade[$key]['ExaminationRuleGrade']['examination_rule_id'] = $lastId ;
					$ruleGrade[$key]['ExaminationRuleGrade']['grade_id']  = $value;				
				}
				$this-> ExaminationRuleGrade ->deleteAll(array('examination_rule_id'=>$lastId));
				$this-> ExaminationRuleGrade ->saveMany($ruleGrade);
			
			$this->setAfterSave(true);
			$this->redirect_to_main_page();
		}
	}

	public function edit($id) {
		$this->prepareData();
		$examination_rule = $this -> ExaminationRule -> findById($id);
		if ($examination_rule == null) {
			$this -> redirect_to_main_page();
		} else {
			if (empty($this -> data)) {
				$this -> data = $examination_rule;
				$this -> render('form');
			} else {
				$this -> ExaminationRule -> save($this -> data);
				$examination_rule_levels = $this->data['ExaminationRuleLevel'];
				foreach($examination_rule_levels as $key => $rule_level) {
					if($rule_level['num_of_question'] == '') unset($examination_rule_levels[$key]);
					else $examination_rule_levels[$key]['examination_rule_id'] = $this->data['ExaminationRule']['id'];
				}
				$this -> ExaminationRuleLevel ->deleteAll(array('examination_rule_id' => $this->data['ExaminationRule']['id']));
				$this -> ExaminationRuleLevel ->saveMany($examination_rule_levels);
				
				$ruleGrade = array();
				foreach ($this->data['grade_list'] as $key => $value) {
					
					$ruleGrade[$key]['ExaminationRuleGrade']['examination_rule_id'] = $this->data['ExaminationRule']['id'] ;
					$ruleGrade[$key]['ExaminationRuleGrade']['grade_id']  = $value;				
				}
				$this-> ExaminationRuleGrade ->deleteAll(array('examination_rule_id'=>$this->data['ExaminationRule']['id'] ));
				$this-> ExaminationRuleGrade ->saveMany($ruleGrade);
				
				$this->setAfterSave(true);
				$this->redirect_to_main_page();
			}
		}
	}

	public function delete($id) {
		$this -> Category -> delete($id);
		$this -> render(false);
	}
	
	public function preview($rule_id) {
		$examination_rule = $this->ExaminationRule->findById($rule_id);

		if(!empty($this->data)) {
			$data = $this->data['Examination'];
			extract($data);			
			$question_list = array();
			foreach($examination_rule['ExaminationRuleLevel'] as $examination_rule_level) {
				$questions = $this->Question->find('all',
												array(
													'conditions'=>array(
																		'category_id'=>$category_id,
																		'level_id' => $examination_rule_level['level_id'],
																		'grade_id' =>$grade_id
																		),
													'order' => 'rand()',
													'limit'	=> $examination_rule_level['num_of_question'],				
													));
				$question_list = array_merge($questions, $question_list);
			}
			$this->set('question_list',$question_list);
		}
		
		
		$this->prepareData();
		$result = $this->ExaminationRuleGrade->find('all',array('conditions'=>array('examination_rule_id'=>$rule_id)));
		$grade_list = array();
		foreach ($result as $key => $value) {
			$grade_list[$value['Grade']['id']] = $value['Grade']['name'];
		}
		$this->set('grade_list',$grade_list);
	}
	

	private function redirect_to_main_page() {
		$this -> redirect('/examination_rules/?result=success');
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
