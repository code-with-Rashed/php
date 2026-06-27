<?php

// PHP Associative Arrays
// Associative arrays use named keys, instead of numeric indices.

$car = array("brand" => "Ford", "model" => "Mustang", "year" => 1964);
print_r($car);

// Access Array Item
// To access a specific array item, refer to the key name.

$car = array("brand" => "Ford", "model" => "Mustang", "year" => 1964);
echo $car["brand"];
echo $car["model"];

// Change Value of Array Item
// To change the value of an array item, use the key name

$car = array("brand" => "Ford", "model" => "Mustang", "year" => 1964);
$car["year"] = 2024;
print_r($car);

// Loop Through an Associative Array
// To loop through and print all the values of an associative array, use a foreach loop, like this

$car = array("brand" => "Ford", "model" => "Mustang", "year" => 1964);
foreach ($car as $key => $value) {
    echo "$key : $value \n";
}
