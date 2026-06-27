<?php
// Create Arrays in PHP
// In PHP, the array() function is used to create an array.

$cars = array("Volvo", "BMW", "Toyota");

// You can also use a shorter syntax to create an array, by using the [] brackets

$cars = ["Volvo", "BMW", "Toyota"];

// Array keys
// When creating indexed arrays the keys are given automatically, starting at 0 and increased by 1 for each item, so the array above could also be created with keys
$cars = [
  0 => "Volvo",
  1 => "BMW",
  2 =>"Toyota"
];
print_r($cars);

// As you can see, indexed arrays are the same as associative arrays, but associative arrays have names instead of numbers

$myCar = [
  "brand" => "Ford",
  "model" => "Mustang",
  "year" => 1964
];
print_r($myCar);

// Declare Empty Array
// You can declare an empty array first, and add items to it later

$names = [];
$names[0] = "Rashed";
$names[1] = "Ahmad";
print_r($names);

// The same goes for associative arrays, you can declare the array first, and then add items to it

$person = [];
$person["name"] = "Rashed";
$person["age"] = 28;
print_r($person);

// Mixing Array Keys
// You can have arrays with both indexed and named keys

$myArr = [];
$myArr[0] = "apples";
$myArr[1] = "bananas";
$myArr["fruit"] = "cherries";
print_r($myArr);