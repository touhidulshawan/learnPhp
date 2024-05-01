<?php

// while
$counter = 0;
while ($counter <= 5) {
    echo $counter . "<br/>";
    $counter++;
};

// for
for ($i = 5; $i >= 0; $i--) {
    echo $i . "<br/>";
};

$fruits = ["Banana", "Apple", "Orange", "Mango"];

// foreach loop
foreach ($fruits as $index => $fruit) {
    echo $index . " " . $fruit . "<br/>";
}

// foreach on associative array
$persons = [
    "name" => "Touhidul Islam",
    "surname" => "Shawan",
    "age" => 25, "Learning" => ["PHP", "Laravel"]
];

foreach ($persons as $key => $value) {
    if (is_array($value)) {
        echo $key . "=> " . implode(",", $value) . "<br/>";
    } else {
        echo $key . "=> " . $value . "<br/>";
    }
}
