class Country extends AppModel {
    public $hasMany = array(
        'Student' => array(
            'className' => 'Student'
        )
    );
}