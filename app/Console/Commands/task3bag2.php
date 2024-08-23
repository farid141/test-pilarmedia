<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\DB;


class task3bag2 extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'app:task3bag2';

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

        $sales_data = DB::table('sales')
            ->whereBetween('sales_date', ['2024-01-01', '2024-12-31'])
            ->get();

        $endTime = microtime(true);
        $executionTime = $endTime - $startTime;

        echo "Execution time (indexing prove): {$executionTime} seconds";
    }
}
