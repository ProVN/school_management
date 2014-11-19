<?php 
class Document extends AppModel {
    public $belongsTo = array(
        'Student' => array(
            'className' => 'Student',
            'foreignKey' => 'student_id'
        ),
        'DocumentType' => array(
            'className' => 'DocumentType',
            'foreignKey' => 'doc_type'
        )
    );
}
?>