<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use OwenIt\Auditing\Contracts\Auditable;

class PurchaseDetails extends Model  implements Auditable
{
    use HasFactory;

    use \OwenIt\Auditing\Auditable;

    protected $table = 'purchase_details';

    protected $fillable = ['product_id','product_quantity','price_per_unit','del_flg'];

    public function getPurchaseDetail($id)
    {
      return  $purchasedProducts = PurchaseDetails::join('products','products.id','purchase_details.product_id')
      ->where('purchase_id',$id)
      ->select('products.*','purchase_details.*')
      ->get();
    }
}
