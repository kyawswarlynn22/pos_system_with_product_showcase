<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use OwenIt\Auditing\Contracts\Auditable;

class DepositSale extends Model  implements Auditable
{
    use HasFactory;

    use \OwenIt\Auditing\Auditable;

    protected $table = 'deposit_sales';

    protected $fillable = ['customers_id ', 'pur_date', 'discount', 'grand_total', 'deposit', 'credit', 'paid', 'remark', 'del_flg'];

    public function getDepositsaleData()
    {
        return $depositSale = DepositSale::join('customers', 'customers.id', 'deposit_sales.customers_id')
            ->join('deposit_sale_details', 'deposit_sales_id', 'deposit_sales.id')
            ->select('customers.cus_name', 'pur_date', 'paid','deposit','credit', 'grand_total', 'deposit_sales.id')
            ->where('deposit_sales.del_flg', 0)
            ->groupBy('customers.cus_name', 'pur_date', 'paid','deposit','credit', 'grand_total', 'deposit_sales.id')
            ->orderBy('deposit_sales.id', 'desc')
            ->paginate(8);
    }

    public function getDepositDetail($id)
    {
        return $cashSaleDetails = DepositSale::join('customers', 'deposit_sales.customers_id', 'customers.id')
            ->join('deposit_sale_details', 'deposit_sales_id', 'deposit_sales.id')
            ->where('deposit_sales.id', $id)
            ->select('pur_date', 'discount', 'paid', 'credit', 'deposit', 'grand_total', 'remark', 'customers.*')
            ->first();
    }

    public function getlastId()
    {
        return DepositSale::max('id');
    }

    public function storeDepositSale($request)
    {
        $depositsale = new DepositSale();
        $depositsale->customers_id  = $request->customer;
        $depositsale->discount = $request->discount;
        $depositsale->grand_total = $request->grandtotal;
        $depositsale->deposit = $request->deposit;
        $depositsale->credit = $request->credit;
        $depositsale->paid = $request->status;
        $depositsale->remark = $request->remark;
        $depositsale->save();

        $lastId = DepositSale::max('id');

        $products = $request->input('productsid', []);
        $quantity = $request->input('quantities', []);
        $price = $request->input('price', []);

        for ($product = 0; $product < count($products); $product++) {
            if ($products[$product] != '') {
                $depositsaleDetails = new DepositSaleDetails();
                $depositsaleDetails->deposit_sales_id  = $lastId;
                $depositsaleDetails->products_id   = $products[$product];
                $depositsaleDetails->quantity = $quantity[$product];
                $depositsaleDetails->price = $price[$product];
                $depositsaleDetails->save();
            }
        }
    }
}
