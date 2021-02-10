<?php

// old way to create a array
// $fruits = array("Apple", "Mango", "Orange");

$fruits = ["Apple", "Mango", "Orange"];

// print element of array
echo $fruits[0]; // print Apple

// print whole things
echo "<pre>";
var_dump($fruits);
echo "</pre>";

// push new element on array
array_push($fruits, "Jackfruit");

// print whole things
echo "<pre>";
var_dump($fruits);
echo "</pre>";

// pop the last element from array
array_pop($fruits);

// print whole things
echo "<pre>";
var_dump($fruits);
echo "</pre>";

// insert element in first index of array
array_unshift($fruits, "Banana");

// print whole things
echo "<pre>";
var_dump($fruits);
echo "</pre>";

// remove the first element from array

array_shift($fruits);

// print whole things
echo "<pre>";
var_dump($fruits);
echo "</pre>";

// merge two array into one

// old way

$cars = ["Volvo", 'BMW', "Toyota"];

$merged =  array_merge($fruits, $cars);


// print whole things
echo "<pre>";
var_dump($merged);
echo "</pre>";

// PHP latest version way

$mergedArray = [...$fruits, ...$cars];

// print whole things
echo "<pre>";
var_dump($mergedArray);
echo "</pre>";
