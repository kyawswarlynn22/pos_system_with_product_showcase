<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use OwenIt\Auditing\Contracts\Auditable;

class DepositSaleDetails extends Model  implements Auditable
{
    use HasFactory;

    use \OwenIt\Auditing\Auditable;

    protected $table = 'deposit_sale_details';

    protected $fillable = ['deposit_sales_id', 'products_id', 'price', 'quantity', 'del_flg'];

    public function getDepositsaleDetail($id)
    {
        return  $cashSaleDetils = DepositSaleDetails::join('products', 'products.id', 'deposit_sale_details.products_id')
            ->where('deposit_sales_id', $id)
            ->select('products.product_name', 'deposit_sale_details.quantity', 'deposit_sale_details.price')
            ->get();
    }
}
