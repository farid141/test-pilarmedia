<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;

class Sales extends Model
{
    use HasFactory;

    public function scopeFilter(Builder $query, Request $request): void
    {
        $query->when($request->date_range, function ($query, $date_range) {
            [$start_date, $end_date] = explode(' to ', $date_range);
            $start_date = date('Y-m-d', strtotime($start_date));
            $end_date = date('Y-m-d', strtotime($end_date));

            return $query->whereBetween('sales_date', [$start_date, $end_date]);
        });
    }

    public function person()
    {
        return $this->belongsTo(SalesPerson::class, 'sales_person_id');
    }

    public function product()
    {
        return $this->belongsTo(Product::class);
    }
}
