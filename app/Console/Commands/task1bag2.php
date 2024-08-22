<?php

namespace App\Console\Commands;

use App\Student;
use App\Teacher;
use Illuminate\Console\Command;

class task1bag2 extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'app:task1bag2';

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
