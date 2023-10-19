<?php

namespace App\Http\Controllers;

use App\Models\Accounting;
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
        return view('Pos.accounting',[
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
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
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
