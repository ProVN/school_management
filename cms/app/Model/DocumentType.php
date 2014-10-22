<?php class DocumentType extends AppModel {
    public $hasMany = array(
        'Document' => array(
            'className' => 'Document',
            'foreignKey' => 'doc_type'
        )
    );
}