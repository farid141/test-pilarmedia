<?php

namespace App;

class Person implements PersonInterface
{
    protected $name, $age;

    /**
     * Create a new class instance.
     */
    public function __construct($name, $age)
    {
        $this->name = $name;
        $this->age = $age;
    }

    // polymorphism
    public function info()
    {
        echo "{$this->name}, {$this->age} years old";
    }

    // inheritance
    public function getName()
    {
        return $this->name;
    }

    public function getAge()
    {
        return $this->age;
    }
}
