<?php

/** 
 * Abstract classes in PHP are defined using the abstract keyword. and it's contains atleast one abstract method. 
 * An abstract method is a method that is declared but not implemented in the abstract class.
 * It's Implemented in the child class.
 * The child class must be defined with the same name and it redeclares the parent abstract method.
 * The child class must be same or less restricted access modifier than the parent abstract method.
 * */

abstract class Car
{
    public string $name;
    function __construct(string $name)
    {
        $this->name = $name;
    }

    abstract public function start_engine(): void;
    abstract protected function is_tested(): bool;
}

class Tesla extends Car
{
    public function start_engine(): void
    {
        echo "The engine of {$this->name} is starting silently. and it is " . ($this->is_tested() ? "tested" : "not tested") . ".\n";
    }

    protected function is_tested(): bool
    {
        return true;
    }
}

class Ford extends Car
{
    public function start_engine(): void
    {
        echo "The engine of {$this->name} is starting with a roar. and it is " . ($this->is_tested() ? "tested" : "not tested") . ".\n";
    }

    public function is_tested(): bool
    {
        return false;
    }
}

$tesla = new Tesla("Model S");
$tesla->start_engine(); // Output: The engine of Model S is starting silently.

$ford = new Ford("Mustang");
//$ford->is_tested(); // Output: false
$ford->start_engine(); // Output: The engine of Mustang is starting with a roar.