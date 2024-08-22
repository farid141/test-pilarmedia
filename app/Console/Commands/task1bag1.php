<?php

namespace App\Console\Commands;

use App\Person;
use Illuminate\Console\Command;

class task1bag1 extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'app:task1bag1';

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
        $person = new Person('Farid', 23);
        echo $person->info();
    }
}
