<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use OwenIt\Auditing\Contracts\Auditable;

class SaleReturnDetails extends Model  implements Auditable
{
    use HasFactory;

    use \OwenIt\Auditing\Auditable;

    protected $table = 'sale_return_details';

    protected $fillable = ['sale_returns_id', 'products_id ', 'price', 'quantity', 'del_flg'];

    public function getSaleReturnDetails($id)
    {
        return  $cashSaleDetils = SaleReturnDetails::join('products', 'products.id', 'sale_return_details.products_id')
            ->where('sale_return_details.sale_returns_id', $id)
            ->select('products.product_name', 'sale_return_details.quantity', 'sale_return_details.price')
            ->get();
    }
}
