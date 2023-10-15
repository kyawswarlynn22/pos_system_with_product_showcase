<?php

namespace App\Http\Controllers;

use App\Models\RetailSale;
use App\Models\RetailSaleDetails;
use Illuminate\Http\Request;

class CashsaleController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $getCashSaleDataClass = new RetailSale();
        $getCashSaleData = $getCashSaleDataClass->getCashSaleData();
        
        return view('Pos.cashsaleList',[
            'CashSaleData' => $getCashSaleData,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('Pos.addCashSale');
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
        $getDetailsClass = new RetailSaleDetails();
        $getDetails = $getDetailsClass->getCashsaleDetail($id);
        
        $getCashDetailsClass = new RetailSale();
        $getCashDetails = $getCashDetailsClass->getCashSaleDetails($id);
    
        return view('Pos.cashsaleDetails',[
            'CashDetails' => $getDetails,
            'ProductDetails' => $getCashDetails,
            'InvoiceNo' => $id,
        ]);
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
