<?php

require_once './Person.php';

require_once './Student.php';

$person = new Person('Touhidul Shawan');
$person->setAge(25);
$person->setEmail('touhidulshawan@gmail.com');

// echo '<pre>';
// var_dump($person);
// echo '</pre>';

echo 'Hi I am '.$person->name.'<br/>';
echo 'I am '.$person->getAge().' years old'.'<br/>';
echo 'Email is: '.$person->getEmail().'<br/>';
echo 'counter '.$person->getCounter().'<br/>';

// student instance
$student = new Student('John', 9354);

$student->setAge(22);
$student->setEmail('john@versity.com');

echo 'My name is '.$student->name.'<br/>';
echo 'I am '.$student->getAge().' years old'.'<br/>';
echo 'My ID is '.$student->studentID.'<br/>';
echo 'My email ID: '.$student->getEmail().'<br/>';
