<?php

// Static properties and methods are accessed without instantiating the class.

class Fruits
{
    public static string $name;
    public static function message()
    {
        echo "Hello you can eat " . self::$name . " fruit. \n";
    }
}
Fruits::$name = "Mango";
Fruits::message();

Fruits::$name = "Apple";
Fruits::message();
