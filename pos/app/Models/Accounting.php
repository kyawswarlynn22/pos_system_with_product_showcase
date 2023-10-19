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
        $currentDate = Carbon::now()->format('Y-m-d');
        return $totalExpense = Income::where('created_at', $currentDate)->sum('amount');
    }

    public function expense()
    {
        $currentDate = Carbon::now()->format('Y-m-d');
        return $totalExpense = ExpenseModel::where('created_at', $currentDate)->sum('amount');
    }

    public function purchase()
    {
        $currentDate = Carbon::now()->format('Y-m-d');
        return $totalExpense = Purchase::where('created_at', $currentDate)->sum('grand_total');
    }

    public function cash()
    {
        $currentDate = Carbon::now()->format('Y-m-d');
        return $totalExpense = RetailSale::where('created_at', $currentDate)->sum('grand_total');
    }

    public function deposit()
    {
        $currentDate = Carbon::now()->format('Y-m-d');
        return $totalExpense = DepositSale::where('created_at', $currentDate)->sum('pre_deposit');
    }

    
}
