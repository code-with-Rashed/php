<?php

class Fruit
{
    function __construct(public string $name, public string $color)
    {
        $this->name = $name;
        $this->color = $color;
    }
    function intro()
    {
        echo "The fruit is $this->name and the color is $this->color. \n";
    }
}

class Strawberry extends Fruit
{
    function message()
    {
        echo "Am I a fruit or a berry? \n";
    }
}

$strawberry = new Strawberry("Strawberry", "red");
$strawberry->intro();
$strawberry->message();

class Tomato extends Fruit
{
    public string $weight;
    function __construct(string $name, string $color, string $weight)
    {
        parent::__construct($name, $color);
        $this->weight = $weight;
    }
    function message()
    {
        echo "I am a $this->color $this->name and I weigh $this->weight. \n";
    }
}

$tomato = new Tomato("Tomato", "red", "200 grams");
$tomato->intro();
$tomato->message();
