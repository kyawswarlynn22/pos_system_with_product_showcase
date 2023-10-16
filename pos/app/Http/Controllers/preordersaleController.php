<?php

namespace App\Http\Controllers;

use App\Models\PreorderDetails;
use App\Models\PreorderSale;
use App\Models\Purchase;
use App\Models\RetailSale;
use Illuminate\Http\Request;

class preordersaleController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $preorderSaleListClass = new PreorderSale();
        $preorderSaleList = $preorderSaleListClass->getPreorderSaleList();
        return view('Pos.preordersaleList',[
            'PreorderList' => $preorderSaleList,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $lastidClass = new PreorderSale();
        $customer = new RetailSale();
        $lastid = $lastidClass->lastId();
        $customerList = $customer->getCustomer();
        $getProductClass = new Purchase();
        $getProduct = $getProductClass->getProduct();
        return view('Pos.addpreordersale',[
            'lastId' => $lastid,
            'customerList' => $customerList,
            'products' => $getProduct,
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
        $getPreorderSaleDetailClass = new PreorderSale();
        $getPreorderSaleDetail = $getPreorderSaleDetailClass->getPreorderSaleDetail($id);

        $preorderProductDetailsClass = new PreorderDetails();
        $getProductDetails = $preorderProductDetailsClass->getProductDetails($id);

     
        return view('Pos.preordersaleDetail',[
            'CashDetails' => $getPreorderSaleDetail,
            'ProductDetails' => $getProductDetails,
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
