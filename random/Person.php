<?php

class Person
{
    public $name;
    public static $counter = 0;
    private $age;
    private $email;

    public function __construct($name)
    {
        $this->name = $name;
        ++self::$counter;
    }

    // set the age
    public function setAge($age)
    {
        $this->age = $age;
    }

    // set the email
    public function setEmail($email)
    {
        $this->email = $email;
    }

    // get the age
    public function getAge()
    {
        return $this->age;
    }

    //get the email
    public function getEmail()
    {
        return $this->email;
    }

    public static function getCounter()
    {
        return self::$counter;
    }
}
