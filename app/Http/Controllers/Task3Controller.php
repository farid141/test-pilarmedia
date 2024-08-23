<?php

namespace App\Http\Controllers;

use App\Models\Sales;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;

class Task3Controller extends Controller
{
    public function __construct()
    {
        Session::put('menu', 'task3');
    }


    public function index()
    {
        // Fetch sales data grouped by month
        $salesPerMonth = Sales::select([
            DB::raw('YEAR(sales_date) as year'),
            DB::raw('MONTH(sales_date) as month'),
            DB::raw('SUM(sales_amount) as total')
        ])
            ->filter(request())
            ->groupBy('year', 'month')
            ->orderBy('year', 'asc')
            ->orderBy('month', 'asc')
            ->get();

        return view('pages.task3', compact('salesPerMonth'));
    }
}
