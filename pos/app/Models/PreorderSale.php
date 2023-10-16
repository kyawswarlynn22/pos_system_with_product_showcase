<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use OwenIt\Auditing\Contracts\Auditable;

class PreorderSale extends Model implements Auditable
{
    use HasFactory;

    use \OwenIt\Auditing\Auditable;

    protected $table = 'preorder_sales';

    protected $fillable = ['customers_id', 'disscount', 'grand_total', 'remark', 'del_flg'];

    public function lastId()
    {
        return PreorderSale::max('id');
    }

    public function getPreorderSaleList()
    {
        return $retailsSale = PreorderSale::join('customers', 'customers.id', 'preorder_sales.customers_id')
            ->select('customers.cus_name', 'pur_date', 'grand_total', 'preorder_sales.id')
            ->where('preorder_sales.del_flg', 0)
            ->orderBy('preorder_sales.id', 'desc')->paginate(8);
    }

    public function getPreorderSaleDetail($id)
    {
        return $cashSaleDetails = PreorderSale::join('customers', 'preorder_sales.customers_id', 'customers.id')
            ->where('preorder_sales.id', $id)
            ->select('pur_date', 'discount', 'grand_total', 'remark', 'customers.*')
            ->first();
    }
}
