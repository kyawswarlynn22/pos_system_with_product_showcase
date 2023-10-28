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
        $timezone = 'Asia/Yangon';
        $currentDate = \Carbon\Carbon::now($timezone);
        $currentDateFormatted = $currentDate->format('Y-m-d');
        $startTime = $currentDateFormatted . ' 00:00:00';
        $endTime = $currentDateFormatted . ' 23:59:59';

        return $totalExpense = Income::where('created_at', '>=', $startTime)
            ->where('created_at', '<=', $endTime)
            ->sum('amount');
    }

    public function expense()
    {
        $timezone = 'Asia/Yangon';
        $currentDate = \Carbon\Carbon::now($timezone);
        $currentDateFormatted = $currentDate->format('Y-m-d');

        $startTime = $currentDateFormatted . ' 00:00:00';
        $endTime = $currentDateFormatted . ' 23:59:59';
        return $totalExpense = ExpenseModel::where('created_at', '>=', $startTime)
            ->where('created_at', '<=', $endTime)
            ->sum('amount');
    }

    public function purchase()
    {
        $timezone = 'Asia/Yangon';
        $currentDate = \Carbon\Carbon::now($timezone);
        $currentDateFormatted = $currentDate->format('Y-m-d');


        $startTime = $currentDateFormatted . ' 00:00:00';
        $endTime = $currentDateFormatted . ' 23:59:59';

        return $totalExpense = Purchase::where('created_at', '>=', $startTime)
            ->where('created_at', '<=', $endTime)
            ->sum('grand_total');
    }



    public function cash()
    {
        $timezone = 'Asia/Yangon';
        $currentDate = \Carbon\Carbon::now($timezone);
        $currentDateFormatted = $currentDate->format('Y-m-d');

        $startTime = $currentDateFormatted . ' 00:00:00';
        $endTime = $currentDateFormatted . ' 23:59:59';

        return $totalExpense = RetailSale::where('created_at', '>=', $startTime)
            ->where('created_at', '<=', $endTime)
            ->sum('grand_total');
    }

    public function deposit()
    {
        $timezone = 'Asia/Yangon';
        $currentDate = \Carbon\Carbon::now($timezone);
        $currentDateFormatted = $currentDate->format('Y-m-d');

        $startTime = $currentDateFormatted . ' 00:00:00';
        $endTime = $currentDateFormatted . ' 23:59:59';

        return $totalExpense = DepositSale::where('created_at', '>=', $startTime)
            ->where('created_at', '<=', $endTime)
            ->sum('pre_deposit');
    }

    public function saleReturn()
    {
        $timezone = 'Asia/Yangon';
        $currentDate = \Carbon\Carbon::now($timezone);
        $currentDateFormatted = $currentDate->format('Y-m-d');

        $startTime = $currentDateFormatted . ' 00:00:00';
        $endTime = $currentDateFormatted . ' 23:59:59';

        return $totalExpense = SaleReturn::where('created_at', '>=', $startTime)
            ->where('created_at', '<=', $endTime)
            ->sum('grand_total');
    }
}
