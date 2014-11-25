<?php
class StudentCalendarYear extends AppModel {
    public $hasMany = array(
        'StudentCalendarSem',
        
    );
}
?>