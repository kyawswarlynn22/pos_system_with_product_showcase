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
            ->select('customers.cus_name', 'pur_date', 'grand_total', 'deposit_sales.id')
            ->where('deposit_sales.del_flg', 0)
            ->orderBy('deposit_sales.id', 'desc')->paginate(8);
    }

    public function getDepositDetail($id)
    {
        return $cashSaleDetails = DepositSale::join('customers', 'deposit_sales.customers_id', 'customers.id')
        ->where('deposit_sales.id', $id)
        ->select('pur_date', 'discount','credit','deposit', 'grand_total', 'remark', 'customers.*')
        ->first();
    }
}
