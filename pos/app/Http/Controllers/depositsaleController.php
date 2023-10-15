<?php

namespace App\Http\Controllers;

use App\Models\Purchase;
use App\Models\RetailSale;
use Illuminate\Http\Request;

class depositsaleController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('Pos.depositsaleList');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $lastidClass = new RetailSale();
        $customerList = $lastidClass->getCustomer();
        $getProductClass = new Purchase();
        $getProduct = $getProductClass->getProduct();
        return view('Pos.addDepositsale',[
            'customerList' => $customerList,
            'products' => $getProduct,
            'lastId' => 1,
        ]);
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
