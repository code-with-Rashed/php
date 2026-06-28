<?php
// PHP Update Array Items
// To update an existing array item, you can refer to the index number for indexed arrays, and the key name for associative arrays

// Change the second array item from "BMW" to "Ford"
$cars = array("Volvo", "BMW", "Toyota");
$cars[1] = "Ford";

// To update items from an associative array, use the key name
$cars = array("brand" => "Ford", "model" => "Mustang", "year" => 1964);
$cars["year"] = 2024;

// Update Array Items in a Foreach Loop
$cars = array("Volvo", "BMW", "Toyota");
foreach ($cars as &$x) {
    $x = "Ford";
}
unset($x);
print_r($cars);
