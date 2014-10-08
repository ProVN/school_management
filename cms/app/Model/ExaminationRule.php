<?php
class ExaminationRule extends AppModel {
	public $hasMany = array('ExaminationRuleLevel','ExaminationRuleGrade');
}
