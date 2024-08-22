<?php

namespace App;

use App\PersonInterface;

class PersonService
{
    public function printPersonDetails(PersonInterface $person)
    {
        echo "Name: " . $person->getName() . "\n";
        echo "Age: " . $person->getAge() . "\n";
    }
}
