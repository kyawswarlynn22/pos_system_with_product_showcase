<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Purchase;
use App\Models\PurchaseDetails;
use AWS\CRT\HTTP\Response;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PurchaseController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $getPurchaseDataClass = new Purchase();
        $getPurchaseData = $getPurchaseDataClass->getPurchaseData();
        return view('Pos.purchaseList', [
            'purchaseData' => $getPurchaseData,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $getProductClass = new Purchase();
        $getProduct = $getProductClass->getProduct();
        return view('Pos.addpurchase', [
            'products' => $getProduct,
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        dd($request);
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $purchasedProductsClass = new PurchaseDetails();
        $purchasedProducts = $purchasedProductsClass->getPurchaseDetail($id);

        $purchaseDetailClass = new Purchase();
        $purchaseDetail = $purchaseDetailClass->getPurchaseDetail($id);

        return view('Pos.purchaseDetails', [
            'purchaseDetail' => $purchasedProducts,
            'puchaseDetail' => $purchaseDetail,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Purchase $purchase)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Purchase $purchase)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Purchase $purchase)
    {
        //
    }

    public function getPrice()
    {
        dd('Vole');
         $getPrice = $_GET['id'];
        $price  = DB::table('purchases')->where('id', $getPrice)->get();
        return response()->json($price);
    }
}
