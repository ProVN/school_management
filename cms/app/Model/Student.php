<?php
class Student extends AppModel {
    public $hasOne = 'StudentInfo';
    public $hasMany = array(
        'Document' => array(
            'className' => 'Document'
        )
    );
    public $belongsTo = array(
        'School' => array(
            'className' => 'School',
            'foreignKey' => 'school_id'
        ),
        'Country' => array(
        	'className' => 'Country',
            'foreignKey' => 'country_id'
        )
        
    );
}
?>