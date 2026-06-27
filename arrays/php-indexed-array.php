<?php

// PHP Indexed Array

// In indexed arrays each item has an index number

$cars = array("BMW", "TYOTA", "VOLVO");
print_r($cars);

// Access Array Item
// To access a specific array item, refer to the index number

$cars = array("BMW", "TYOTA", "VOLVO");
echo $cars[0];
echo $cars[1];

// Change Value of Array Item
// To change the value of an array item, use the index number

$cars = array("BMW", "TYOTA", "VOLVO");
$cars[0] = "FORD";
$cars[1] = "Lemborginy";
print_r($cars);

// Loop Through an Indexed Array
// To loop through and print all the values of an indexed array, use a foreach loop, like this

$cars = array("BMW", "TYOTA", "VOLVO");
foreach ($cars as $car) {
    echo $car . "\n";
}

