<?php

class Fruit
{
    public string $name;
    public string $color;

    public function set_details(string $name, string $color): void
    {
        $this->name = $name;
        $this->color = $color;
    }

    public function get_details(): string
    {
        return "The fruit is $this->name and the color is $this->color. \n";
    }
}
$apple = new Fruit();
$apple->set_details("Apple", "Red");
echo $apple->get_details();

$banana = new Fruit();
$banana->set_details("Banana", "Yellow");
echo $banana->get_details();

class Car
{
    public string $make;
    public string $model;

    public function set_details(string $make, string $model): void
    {
        $this->make = $make;
        $this->model = $model;
    }

    public function get_details(): string
    {
        return "The car is a $this->make $this->model. \n";
    }
}

$car1 = new Car();
$car1->set_details("Toyota", "Camry");
echo $car1->get_details();

$car2 = new Car();
$car2->set_details("Honda", "Civic");
echo $car2->get_details();
