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

// split string into array
$food = "Burger, Pizza, Steak, Rice";

$foodArray = explode(",", $food);

// print whole things
echo "<pre>";
var_dump($foodArray);
echo "</pre>";

// convert array to string
$foodType = implode(",", $foodArray);

echo var_dump($foodType);


// check element does exist on array
echo "<pre>";
var_dump(in_array("Mango", $fruits));
echo "</pre>";

// search element index in array
echo "<pre>";
var_dump(array_search("Mango", $fruits)); // return index 1
echo "</pre>";

// sorting array
sort($fruits);
echo "<pre>";
var_dump($fruits);
echo "</pre>";

// for reverse sort we use rsort()
// sorting array in reverse way
rsort($fruits);
echo "<pre>";
var_dump($fruits);
echo "</pre>";

// associative array
// associative array is key pair value array
$persons = [
    "name" => "Touhidul Islam",
    "surname" => "Shawan",
    "age" => 25, "Learning" => ["PHP", "Laravel"]
];

echo "<pre>";
var_dump($persons);
echo "</pre>";

// get element by key
echo $persons["name"] . "<br/>";

// set element by key
$persons["food"] = "Chocolate";

echo "<pre>";
var_dump($persons);
echo "</pre>";

// null coalescing assignment operator

$persons["address"] ??= "unknown";

echo "<pre>";
var_dump($persons);
echo "</pre>";

// print the keys of array
echo "<pre>";
var_dump(array_keys($persons));
echo "</pre>";

// print values of array

echo "<pre>";
var_dump(array_values($persons));
echo "</pre>";
