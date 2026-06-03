<?php

class Developer
{
    public string $name;
    public array $skills;

    public function __construct(string $name, array $skills)
    {
        $this->name = $name;
        $this->skills = $skills;
    }

    public function __destruct()
    {
        echo "The developer name is $this->name and has skills in " . implode(", ", $this->skills) . ". \n";
    }
}
$developer = new Developer("John Doe", ["PHP", "JavaScript", "Python"]);

class Ai
{
    function __construct(public string $name, public string $type)
    {
        $this->name = $name;
        $this->type = $type;
    }
    function __destruct()
    {
        echo "The AI name is $this->name and is of type $this->type. \n";
    }
}

new Ai("ChatGPT", "Language Model");
