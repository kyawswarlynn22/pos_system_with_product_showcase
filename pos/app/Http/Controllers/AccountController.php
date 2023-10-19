<?php

namespace App\Http\Controllers;

use App\Models\Accounting;
use App\Models\DepositSale;
use App\Models\ExpenseModel;
use App\Models\Income;
use App\Models\Purchase;
use App\Models\RetailSale;
use Illuminate\Http\Request;

class AccountController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $AccountingClass = new Accounting();
        $totalExpense = $AccountingClass->expense();
        $totalIncome = $AccountingClass->income();
        $totalPurchase = $AccountingClass->purchase();
        $totalCash = $AccountingClass->cash();
        $totalDeposit = $AccountingClass->deposit();
        return view('Pos.accounting', [
            'expense' => $totalExpense,
            'income' => $totalIncome,
            'purchase' => $totalPurchase,
            'cash' => $totalCash,
            'deposit' => $totalDeposit,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create($request)
    {
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $startDate = $request->start_date;
        $endDate = $request->end_date;
        $expenses = ExpenseModel::whereBetween('created_at', [$startDate, $endDate])
            ->sum('amount');
        $purchase = Purchase::whereBetween('created_at', [$startDate, $endDate])
            ->sum('grand_total');
        $income = Income::whereBetween('created_at', [$startDate, $endDate])
            ->sum('amount');
        $cash = RetailSale::whereBetween('created_at', [$startDate, $endDate])
            ->sum('grand_total');
        $deposit = DepositSale::whereBetween('created_at', [$startDate, $endDate])
            ->sum('pre_deposit');

            return view('Pos.accountdate', [
                'start_date' => $request->start_date,
                'end_date' => $request->end_date,
                'expense' => $expenses,
                'income' => $income,
                'purchase' => $purchase,
                'cash' => $cash,
                'deposit' => $deposit,
            ]);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
