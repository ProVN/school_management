<?php
App::uses('AppController', 'Controller');
class QuestionsController extends AppController {

	public function index($category_id = 0) {
		$this->prepareData();
		$questions = array();
		if($category_id == 0) {
			$questions = $this -> Question -> find('all');
		}
		else {
			$questions = $this -> Question -> find('all',array('conditions'=>array('category_id'=>$category_id)));
		}
		$this -> set('questions', $questions);
		$this->setAfterSave(false);
	}

	public function add() {
		$this->prepareData();
		$number_of_answer = 4;
		if (empty($this -> data)) {
			$this -> set('number_of_answer',$number_of_answer);
			$this -> render('form');
		} else {
			$this->doSave();
		}
	}

	public function edit($id) {
		$this->prepareData();
		$question = $this -> Question -> findById($id);
		$number_of_answer = count($question["Answer"]);
		if($number_of_answer == 0) $number_of_answer = 4;
		if ($question == null) {
			$this -> redirect_to_main_page();
		} else {
			if (empty($this -> data)) {
				$this -> data = $question;
				$this -> set('number_of_answer',$number_of_answer);
				$this -> render('form');
			} else {
				$this->doSave();
			}
		}
	}
		
	public function delete($id) {
		$this -> Answer ->deleteAll(array('question_id'=>$id));
		$this -> Question -> delete($id);
		$this -> render(false);
	}
	
	private function prepareData()
	{
		$level_list = $this->Level->find('list');
		$category_list = $this->Category->find('list');
		$grade_list = $this->Grade->find('list');
		
		$this->set('level_list',$level_list);
		$this->set('category_list',$category_list);
		$this->set('grade_list',$grade_list);
	}
	
	private function doSave()
	{
		$submit_type = $_POST['submit_type'];
		if($submit_type == 'new_answer_row') {
			$question = $this->data;
			$number_of_answer = $this->data['Question']['number_of_answer'];
			$number_of_answer++;
			$question['Question']['number_of_answer'] = $number_of_answer;
			$this->data = $question;
			$this -> set('number_of_answer',$number_of_answer);
			$this->render('form');
		}
		else {
			$this -> set('number_of_answer',$number_of_answer); 
			$this -> Question -> save($this -> data);
			$this -> Answer -> deleteAll(array('question_id'=>$this->data['Question']['id']));
			$answers = $this->data['Answer'];
			foreach($answers as $key => $answer) {
				if($answer['name'] == '') unset($answers[$key]);
			}
			$this -> Answer ->saveMany($answers);
			$this->setAfterSave(true);
			$this->redirect_to_main_page();
		}
	}
	
	private function redirect_to_main_page() {
		$this -> redirect('/questions/?result=success');
	}

}
