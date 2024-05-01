<?php

//magic constants

echo __DIR__.'<br/>';
echo __FILE__.'<br/>';
echo __LINE__.'<br/>';

// create new directory
// mkdir('Assets');

//rename directory
//rename('Assets', 'Sass');

// delete a directory

// rmdir('Sass');

// read all file in directory

$files = scandir('./');

echo '<pre>';
var_dump($files);
echo '</pre>';

// read content of file
echo file_get_contents('./demo.txt');

// put content into a file
file_put_contents('Demo2.txt', 'This is some demo contents');

// get content from url
echo '<br/>';

$data = file_get_contents('https://jsonplaceholder.typicode.com/todos');

// echo $data;

$todo = json_decode($data, true);
// true specify that we want to convert it into associative array
echo '<pre>';
var_dump($todo);
echo '</pre>';
