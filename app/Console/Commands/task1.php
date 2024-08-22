<?php

namespace App\Console\Commands;

use App\Person;
use App\Student;
use App\Task1 as AppTask1;
use App\Teacher;
use Illuminate\Console\Command;

class task1 extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'app:task1';

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
        $student = new Student("farid", 23, 4);
        $student->info();

        echo "\n";

        $teacher = new Teacher("Beni", 43, 'Computer Science');
        $teacher->info();
    }
}
