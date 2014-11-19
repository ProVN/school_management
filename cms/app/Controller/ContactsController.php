<?php
App::uses('AppController', 'Controller');
class ContactsController extends AppController {
	public function index() {
		if(empty($this->data)){
			$this->data = $this->Contact->findById(1);
			$this->set('contact',$contact);
		}	
		else {
			$this->Contact->save($this->data);
		}	
	}
}
