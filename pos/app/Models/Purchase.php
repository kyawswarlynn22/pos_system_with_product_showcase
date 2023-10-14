<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use OwenIt\Auditing\Contracts\Auditable;

class Purchase extends Model  implements Auditable
{
    use HasFactory;

    use \OwenIt\Auditing\Auditable;

    protected $table = 'purchases';

    protected $fillable = ['sup_country', 'p_date','grand_total', 'ship_status', 'del_flg'];

    public function getPurchaseData()
    {
        return $purchases = Purchase::orderBy('id', 'desc')->paginate(5);
    }

    public function getPurchaseDetail($id)
    {
        return Purchase::where('id', $id)->first();
    }

    public function getProduct()
    {
        return Product::get();
    }

    public function getlastId()
    {
        return $lastId = Purchase::max('id');
    }

    public function storePurchaseData($request)
    {
        //create Purchase
        $purchase = new Purchase();
        $purchase->sup_country = $request->country;
        $purchase->grand_total = $request->grandtotal;
        $purchase->ship_status = $request->status;
        $purchase->save();

        $lastId = Purchase::max('id');

        //Create Purchase Details
        $products = $request->input('productsid', []);
        $quantity = $request->input('quantities', []);
        $price = $request->input('price', []);

        for ($product = 0; $product < count($products); $product++) {
            if ($products[$product] != '') {
                $purchaseDetails = new PurchaseDetails();
                $purchaseDetails->purchase_id = $lastId;
                $purchaseDetails->product_id = $products[$product];
                $purchaseDetails->product_quantity = $quantity[$product];
                $purchaseDetails->price_per_unit = $price[$product];
                $purchaseDetails->save();
            }
        }
    }

    public function updatePurchaseDetail($request, $id)
    {
      
        $updatePurchase = Purchase::find($id);
        if ($updatePurchase) {
            $updatePurchase->update([
                'sup_country' => $request->country,
                'ship_status' => $request->status,
                'grand_total' => $request->grandtotal,
                'del_flg'=> 0,
            ]);
        }

        $delPurchaseDeatail = PurchaseDetails::where('purchase_id', $id);
        $delPurchaseDeatail->delete();

        $products = $request->input('productsid', []);
        $quantity = $request->input('quantities', []);
        $price = $request->input('price', []);

        for ($product = 0; $product < count($products); $product++) {
            if ($products[$product] != '') {
                $purchaseDetails = new PurchaseDetails();
                $purchaseDetails->purchase_id = $id;
                $purchaseDetails->product_id = $products[$product];
                $purchaseDetails->product_quantity = $quantity[$product];
                $purchaseDetails->price_per_unit = $price[$product];
                $purchaseDetails->save();
            }
        }
    }
}
