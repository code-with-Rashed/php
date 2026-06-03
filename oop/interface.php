<?php

interface Vehicle
{
    public function start_engine();
    public function stop_engine();
    public function set_brand(string $brand);
}

class MyCar implements Vehicle
{
    public string $name;
    public function start_engine()
    {
        echo "Starting the engine of the car: " . $this->name . "\n";
    }
    public function stop_engine()
    {
        echo "Stopping the engine of the car: " . $this->name . "\n";
    }
    public function set_brand(string $brand)
    {
        $this->name = $brand;
    }
}

$car = new MyCar();
$car->set_brand("Toyota");
$car->start_engine();
$car->stop_engine();

interface Animal
{
    public function make_sound();
}

class Dog implements Animal
{
    public function make_sound()
    {
        echo "Woof! Woof!\n";
    }
}
$dog = new Dog();
$dog->make_sound();

class Tiger implements Animal
{
    public function make_sound()
    {
        echo "Roar! Roar!\n";
    }
}
$tiger = new Tiger();
$tiger->make_sound();
