<?php

// public access modifier allows class properties and methods to be accessed from anywhere, both inside and outside the class.

class Fruit
{
    public string $name;

    public function get_name(): string
    {
        return $this->name . "\n";
    }
}
$fruit = new Fruit();
$fruit->name = "Apple";
echo $fruit->get_name();

// private access modifier allows class properties and methods to be accessed only withen the class itself. It cannot be accessed from outside the class or from any subclass.

class Account
{
    private float $account_number;
    private float $blance;

    public function __construct(float $account_number, float $blance)
    {
        $this->account_number = $account_number;
        $this->blance = $blance;
    }

    public function get_account_number(): float
    {
        return $this->account_number;
    }

    public function get_balance(): float
    {
        return $this->blance;
    }

    public function add_bonus(float $amount): void
    {
        $this->calculate_bonus($amount);
    }

    private function calculate_bonus(float $amount): float
    {
        return $this->blance =  $this->blance + $amount;
    }
}

$account = new Account(123456789, 1000.00);
echo "Account Number: " . $account->get_account_number() . "\n";
echo "Balance: " . $account->get_balance() . "\n";
$account->add_bonus(500.00);
echo "Balance after adding bonus: " . $account->get_balance() . "\n";

// protected access modifier allows class properties and methods to accessed within the class itsef and by any subclass that extends the class. It cannot be accessed from outside the class or from any other class that does not extend the class.

class Vehicle
{
    protected string $brand;

    public function set_brand(string $brand)
    {
        $this->brand = $brand;
    }
}

class Car extends Vehicle
{
    public function get_brand(): string
    {
        return $this->brand . "\n";
    }
}

$car = new Car();
$car->set_brand("Toyota");
echo $car->get_brand();
