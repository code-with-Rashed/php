<?php

// Constants in PHP are defined using the `const` keyword and are case-sensitive. They cannot be changed once they are defined.
// A class constant is defined within a class and can be accessed using the class name followed by the scope resolution operator `::` and accessed inside the class using `self::` keyword.

class Goodbye
{
    const MESSAGE = "Goodbye, World! \n";
}

echo Goodbye::MESSAGE; // Output: Goodbye, World!

class Circle
{
    const PI = 3.14159;

    public function area(int $radius)
    {
        return self::PI * $radius * $radius;
    }
}
$circle = new Circle();
echo $circle->area(5); // Output: 78.53975