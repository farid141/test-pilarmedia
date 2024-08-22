<?php

namespace App;

class Teacher extends Person
{
    private $course;
    /**
     * Create a new class instance.
     */
    public function __construct($name, $age, $course)
    {
        parent::__construct($name, $age);
        $this->course = $course;
    }

    public function info()
    {
        echo "Teacher {$this->name}, {$this->age} years old, course {$this->course}";
    }

    public function getCourse()
    {
        return $this->course;
    }
}
