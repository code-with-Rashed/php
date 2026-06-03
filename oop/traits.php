<?php

// Traits in PHP allow you to reuse methods and properties accross multiple classes without using inheritance.

trait MessageTrait
{
    public string $name;
    public function send_message(string $message)
    {
        echo "Message sent from {$this->name} : $message \n";
    }
    public function receive_message(string $message)
    {
        echo "Message received by {$this->name} : $message \n";
    }
}

trait LoggerTrait
{
    public function log(string $message)
    {
        echo "Log: $message \n";
    }
}

class User
{
    use MessageTrait, LoggerTrait;
}

$user = new User();
$user->name = "John Doe";
$user->send_message("Hello, World!");
$user->log("User logged in.");
$user->receive_message("Hi there!");
