<?php

require_once './Person.php';

class Student extends Person
{
    public $studentID;

    public function __construct($name, $studentID)
    {
        parent::__construct($name);
        $this->studentID = $studentID;
    }
}
