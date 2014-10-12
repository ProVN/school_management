<?php
class Student extends AppModel {
    public $hasMany = array(
        'Document' => array(
            'className' => 'Document'
        ),
        'StudentInfo'
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