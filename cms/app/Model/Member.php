<?php
class Member extends AppModel {
	public $hasMany = array('AuthToken');
	public $belongsTo = array('Grade');
}
