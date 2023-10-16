<?php

namespace App\Http\Controllers;

use App\Models\DepositSale;
use App\Models\DepositSaleDetails;
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
        $depositSaleDataClass = new DepositSale();
        $depositSaleData = $depositSaleDataClass->getDepositsaleData();
        return view('Pos.depositsaleList', [
            'DepositsaleData' => $depositSaleData
        ]);
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
        $lastIdClass = new DepositSale();
        $lastId = $lastIdClass->getlastId();
        return view('Pos.addDepositsale', [
            'customerList' => $customerList,
            'products' => $getProduct,
            'lastId' => $lastId,
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $storeDepositSaleClass = new DepositSale();
        $storeDepositSale = $storeDepositSaleClass->storeDepositSale($request);
        $getlastId = $storeDepositSaleClass->getlastId();
        $updateStockCountClass = new DepositSaleDetails();
        $updateStockCount = $updateStockCountClass->updateSotckCount($getlastId);
        return back();
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $getDepositSaleDetailClass = new DepositSale();
        $getDepositSaleProductDetailsClass = new DepositSaleDetails();
        $getDepositSaleDetail = $getDepositSaleDetailClass->getDepositDetail($id);
        $getDepositSaleProductDetails = $getDepositSaleProductDetailsClass->getDepositsaleDetail($id);
        return view('Pos.depositsaleDetail', [
            'DepositSaleDetail' => $getDepositSaleDetail,
            'DepositSaleProducts' => $getDepositSaleProductDetails,
            'InvoiceNo' => $id
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $lastidClass = new RetailSale();
        $customerList = $lastidClass->getCustomer();

        $getDepositSaleDetailsClass = new DepositSale();
        $getDepositSaleDetails = $getDepositSaleDetailsClass->getDepositSale($id);

        $getProductDetailsclass = new DepositSaleDetails();
        $getDepositSaleDetail = $getProductDetailsclass->getDepositSlaeDetail($id);

        $getProductClass = new Purchase();
        $getProduct = $getProductClass->getProduct();
        // dd($customerList,$getDepositSaleDetails,$getDepositSaleDetail,$getProduct);
        return view('Pos.editDepositsale', [
            'customerList' => $customerList,
            'DepositSaleDetails' => $getDepositSaleDetails,
            'DetailsaleProducts' => $getDepositSaleDetail,
            'products' => $getProduct,
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
     
        $updateDepositSaleClass = new DepositSale();
        $updateDepositSale = $updateDepositSaleClass->updateDepositSaleDetail($request, $id);

        $updateStockCountClass = new DepositSaleDetails();
        $updateDepositSale = $updateStockCountClass->updateSotckCount($id);

        return redirect('/depositsale');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
