<?php

namespace App\Console\Commands;

use App\PersonService;
use App\Student;
use App\Teacher;
use Illuminate\Console\Command;

class task1bag3 extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'app:task1bag3';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $student = new Student("Alice", 20, "S12345");
        $teacher = new Teacher("Bob", 35, "Mathematics");

        $service = new PersonService();
        $service->printPersonDetails($student); // Output: Name: Alice, Age: 20
        $service->printPersonDetails($teacher); // Output: Name: Bob, Age: 35
    }
}
