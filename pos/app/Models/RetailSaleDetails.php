<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use OwenIt\Auditing\Contracts\Auditable;

class RetailSaleDetails extends Model implements Auditable
{
    use HasFactory;

    use \OwenIt\Auditing\Auditable;

    protected $table = 'retail_sale_details';

    protected $fillable = ['retail_sales_id', 'products_id', 'p_quantity', 'p_price', 'del_flg'];

    public function getCashsaleDetail($id)
    {
        return  $cashSaleDetils = RetailSaleDetails::join('products', 'products.id', 'retail_sale_details.products_id')
            ->where('retail_sale_details.retail_sales_id', $id)
            ->select('products.product_name', 'p_quantity','p_price')
            ->get();
    }
}
