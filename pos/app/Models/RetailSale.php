<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use OwenIt\Auditing\Contracts\Auditable;

class RetailSale extends Model implements Auditable
{
    use HasFactory;

    use \OwenIt\Auditing\Auditable;

    protected  $table = 'retail_sales';

    protected $fillable = ['customers_id', 'pur_date', 'discount', 'grand_total', 'remark', 'del_flg'];

    public function getCashSaleData()
    {
        return $retailsSale = RetailSale::join('customers', 'customers.id', 'retail_sales.customers_id')
            ->select('customers.cus_name', 'pur_date', 'grand_total', 'retail_sales.id')
            ->where('retail_sales.del_flg', 0)
            ->orderBy('retail_sales.id', 'desc')->paginate(5);
    }

    public function getCashSaleDetails($id)
    {
        return $cashSaleDetails = RetailSale::join('customers', 'retail_sales.customers_id', 'customers.id')
            ->where('retail_sales.id', $id)
            ->select('pur_date', 'discount', 'grand_total', 'remark', 'customers.*')
            ->first();
    }

    public function lastId()
    {
        return RetailSale::max('id');
    }

    public function getCustomer()
    {
        return Customer::get();
    }

    public function storeCashsaleData($request)
    {
        if ($request->has('preorder_id')) {
            $preorder =   PreorderSale::find($request->preorder_id);
            if ($preorder) {
                $preorder->update([
                    'del_flg' => 1,
                ]);
            }
        }
        $cashsale = new RetailSale();
        $cashsale->customers_id = $request->customer;
        $cashsale->discount = $request->discount;
        $cashsale->grand_total = $request->grandtotal;
        $cashsale->remark = $request->remark;
        $cashsale->save();

        $lastId = RetailSale::max('id');

        $products = $request->input('productsid', []);
        $quantity = $request->input('quantities', []);
        $price = $request->input('price', []);

        for ($product = 0; $product < count($products); $product++) {
            if ($products[$product] != '') {
                $cashsaleDetails = new RetailSaleDetails();
                $cashsaleDetails->retail_sales_id = $lastId;
                $cashsaleDetails->products_id  = $products[$product];
                $cashsaleDetails->p_quantity = $quantity[$product];
                $cashsaleDetails->p_price = $price[$product];
                $cashsaleDetails->save();
            }
        }
    }

    public function cashsaleData($id)
    {
        return RetailSale::where('id', $id)->first();
    }

    public function updateCashsaleDetail($request, $id)
    {
        $updateCashsale = RetailSale::find($id);
        if ($updateCashsale) {
            $updateCashsale->update([
                'customers_id' => $request->customer,
                'discount' => $request->discount,
                'grand_total' => $request->grandtotal,
                'remark' => $request->remark,
            ]);
        }

        $updateProductStockclass = new RetailSaleDetails();
        $updateProductStock = $updateProductStockclass->delUpdateSotck($id);

        $delCashsaleDetail = RetailSaleDetails::where('retail_sales_id', $id);
        $delCashsaleDetail->delete();

        $products = $request->input('productsid', []);
        $quantity = $request->input('quantities', []);
        $price = $request->input('price', []);

        for ($product = 0; $product < count($products); $product++) {
            if ($products[$product] != '') {
                $cashsaleDetails = new RetailSaleDetails();
                $cashsaleDetails->retail_sales_id = $id;
                $cashsaleDetails->products_id  = $products[$product];
                $cashsaleDetails->p_quantity = $quantity[$product];
                $cashsaleDetails->p_price = $price[$product];
                $cashsaleDetails->save();
            }
        }
    }
}
