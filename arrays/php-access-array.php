<?php
// PHP Access Arrays
// To access an array item, you can refer to the index number for indexed arrays, and the key name for associative arrays.

// Accessing an item by referring to its index number

$cars = array("Volvo", "BMW", "Toyota");
echo $cars[2];

// To access items from an associative array, use the key name
// Access an item by referring to its key name
$cars = array("brand" => "Ford", "model" => "Mustang", "year" => 1964);
echo $cars["year"];

// Execute a Function Item
// Array items can be of any data type, including functions.
// To execute such a function, use the index number followed by parentheses ()

function hello()
{
    echo "Hello everyone";
}
$arr = ["Hi", "hello"];
$arr[1]();

// Execute function by referring to the key name
function message()
{
    echo "Print from function";
}
$arr = ["message" => "message"];
$arr["message"]();

// Loop Through an Associative Array
// To loop through and print all the values of an associative array, use a foreach loop, like this
// Display all array items, keys and values

$car = array("brand" => "Ford", "model" => "Mustang", "year" => 1964);
foreach ($car as $key => $value) {
    echo "$key : $value \n";
}

// Loop Through an Indexed Array
// To loop through and print all the values of an indexed array, use a foreach loop, like this
// Display all array items

$cars = array("Volvo", "BMW", "Toyota");
foreach ($cars as $car) {
    echo "$car \n";
}
