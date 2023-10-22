<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Carbon;

class Accounting extends Model
{
    use HasFactory;

    public function income()
    {
        // $currentDate = Carbon::now()->format('Y-m-d');
        // return $totalExpense = Income::where('created_at', $currentDate)->sum('amount');
        $currentDate = Carbon::now()->format('Y-m-d');
        $startTime = $currentDate . ' 00:00:00';
        $endTime = $currentDate . ' 23:59:59';

        return $totalExpense = Income::where('created_at', '>=', $startTime)
            ->where('created_at', '<=', $endTime)
            ->sum('amount');
    }

    public function expense()
    {
        $currentDate = Carbon::now()->format('Y-m-d');
        $startTime = $currentDate . ' 00:00:00';
        $endTime = $currentDate . ' 23:59:59';

        return $totalExpense = ExpenseModel::where('created_at', '>=', $startTime)
            ->where('created_at', '<=', $endTime)
            ->sum('amount');
    }

    public function purchase()
    {
        $currentDate = Carbon::now()->format('Y-m-d');
        $startTime = $currentDate . ' 00:00:00';
        $endTime = $currentDate . ' 23:59:59';

        return $totalExpense = Purchase::where('created_at', '>=', $startTime)
            ->where('created_at', '<=', $endTime)
            ->sum('grand_total');
    }

    public function cash()
    {
        $currentDate = Carbon::now()->format('Y-m-d');
        $startTime = $currentDate . ' 00:00:00';
        $endTime = $currentDate . ' 23:59:59';

        return $totalExpense = RetailSale::where('created_at', '>=', $startTime)
            ->where('created_at', '<=', $endTime)
            ->sum('grand_total');
    }

    public function deposit()
    {
        $currentDate = Carbon::now()->format('Y-m-d');
        $startTime = $currentDate . ' 00:00:00';
        $endTime = $currentDate . ' 23:59:59';

        return $totalExpense = DepositSale::where('created_at', '>=', $startTime)
            ->where('created_at', '<=', $endTime)
            ->sum('pre_deposit');
    }

    public function saleReturn()
    {
        $currentDate = Carbon::now()->format('Y-m-d');
        $startTime = $currentDate . ' 00:00:00';
        $endTime = $currentDate . ' 23:59:59';

        return $totalExpense = SaleReturn::where('created_at', '>=', $startTime)
            ->where('created_at', '<=', $endTime)
            ->sum('grand_total');
    }
}
