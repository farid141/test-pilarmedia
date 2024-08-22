<?php

namespace App;

class Student extends Person
{
    // encapsulation
    private $semester, $scoreCount = 0, $totalScore = 0;
    /**
     * Create a new class instance.
     */
    public function __construct($name, $age, $semester)
    {
        parent::__construct($name, $age);
        $this->semester = $semester;
    }

    public function info()
    {
        echo "Student {$this->name}, {$this->age} years old, smester {$this->semester}";
    }

    public function getAverageScore()
    {
        return $this->totalScore / $this->scoreCount;
    }

    public function addScore($score)
    {
        $this->scoreCount++;
        $this->totalScore += $score;
    }
}
