<?php
class Question extends AppModel {
	public $belongsTo = array('Category','Level','Grade');	
	public $hasMany = array('Answer' => array('dependent'=>true));
}
