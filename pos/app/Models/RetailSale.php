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

    protected $fillable = ['customers_id' , 'pur_date' , 'discount' , 'grand_total' , 'remark' , 'del_flg'];

    public function getCashSaleData()
    {
        return $retailsSale = RetailSale::join('customers','customers.id' , 'retail_sales.customers_id')
        ->select('customers.cus_name','pur_date','grand_total','retail_sales.id')
        ->where('retail_sales.del_flg' , 0)
        ->orderBy('retail_sales.id', 'desc')->paginate(5);
    }

    public function getCashSaleDetails($id)
    {
        return $cashSaleDetails = RetailSale::join('customers','retail_sales.customers_id' , 'customers.id')
        ->where('retail_sales.id',$id)
        ->select('pur_date','discount','grand_total','remark', 'customers.*')
        ->first();
    }
}
