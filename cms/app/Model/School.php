<?php 
class School extends AppModel {
	public $hasMany = array(
		'Student' => array(
		'className' => 'Student'
		)
	);
}
?>