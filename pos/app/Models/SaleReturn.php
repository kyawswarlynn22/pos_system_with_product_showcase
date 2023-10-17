<?php

namespace App\Models;

use App\Http\Controllers\salereturnController;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use OwenIt\Auditing\Contracts\Auditable;

class SaleReturn extends Model  implements Auditable
{
    use HasFactory;

    use \OwenIt\Auditing\Auditable;

    protected $table = 'sale_returns';

    protected $fillable = ['return_date','customers_id','discount', 'grand_total','remark', 'del_flg'];

    public function getlastId()
    {
        return $lastId = SaleReturn::max('id');
    }

    public function getSaleReturnList()
    {
        return $retailsSale = SaleReturn::join('customers', 'customers.id', 'sale_returns.customers_id')
            ->select('customers.cus_name', 'return_date', 'grand_total','sale_returns.id')
            ->where('sale_returns.del_flg', 0)
            ->orderBy('sale_returns.id', 'desc')->paginate(8);
    }

    // public function getSaleReturn($id)
    // {
    //     return SaleReturn::where('id', $id)->first();
    // }

    public function getSaleReturn($id)
    {
        return $cashSaleDetails = SaleReturn::join('customers', 'sale_returns.customers_id', 'customers.id')
            ->where('sale_returns.id', $id)
            ->select('return_date', 'discount', 'grand_total','sale_returns.id as return_id', 'remark', 'customers.*')
            ->first();
    }
}
