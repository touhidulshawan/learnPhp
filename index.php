<?php
$name  = "Touhidul Shawan";
$age = 25;

// constant variable
define("NAME", "James");
// concatination
$string1 = "Hello";
$string2 = "World";
echo $string1 . " " . $string2;
echo "<br/>";
echo "My name is $name";
echo "<br/>";
echo "My name is " . $name;
echo strtoupper($name);
echo "<br/>";
// array

$cars = ["Volvo", "BMW", "Toyota"];
var_dump($cars);

for ($i = 0; $i < strlen($name); $i++) {
    echo "<br/>";
    echo $name[$i];
}


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PortFolio</title>
</head>

<body>
    <h1><?php echo $name ?></h1>
    <h2><?php echo $age ?></h2>
    <h3>Constant variable value: <?php echo NAME ?></h3>
</body>

</html>