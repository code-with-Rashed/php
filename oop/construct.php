<?php

class Car
{
    public string $make;
    public string $model;
    public int $year;

    public function __construct(string $make, string $model, int $year)
    {
        $this->make = $make;
        $this->model = $model;
        $this->year = $year;
    }

    public function get_car_info(): string
    {
        return "This car is a $this->year $this->make $this->model. \n";
    }
}

$car1 = new Car("Toyota", "Camry", 2020);
echo $car1->get_car_info();

$car2 = new Car("Honda", "Civic", 2019);
echo $car2->get_car_info();

class Person
{
    function __construct(public string $name, public int $age)
    {
        $this->name = $name;
        $this->age = $age;
    }

    public function get_person_info(): string
    {
        return "This person's name is $this->name and they are $this->age years old. \n";
    }
}
$person1 = new Person("Alice", 30);
echo $person1->get_person_info();

$person2 = new Person("Bob", 25);
echo $person2->get_person_info();
