<?php

namespace App\Console\Commands;

use App\Models\Sales;
use Illuminate\Console\Command;

class task3bag1 extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'app:task3bag1';

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
        $startTime = microtime(true);
        $sales = Sales::with(['person', 'product'])->limit(100)->get();
        foreach ($sales as $s) {
            $s->id;
            $s->product->name;
            $s->person->name;
            // echo "sales {$s->id}, product {$s->product->name} by {$s->person->name}\n";
        }
        $endTime = microtime(true);
        $executionTimeWithoutIndex = $endTime - $startTime;
        echo "Execution time with eager load: {$executionTimeWithoutIndex} seconds";

        echo "\n";
        $startTime = microtime(true);
        $sales = Sales::limit(100)->get();
        foreach ($sales as $s) {
            $s->id;
            $s->product->name;
            $s->person->name;
            // echo "sales {$s->id}, product {$s->product->name} by {$s->person->name}\n";
        }
        $endTime = microtime(true);
        $executionTimeWithoutIndex = $endTime - $startTime;
        echo "Execution time without eager load: {$executionTimeWithoutIndex} seconds";
    }
}
