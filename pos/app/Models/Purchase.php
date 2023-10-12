<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use OwenIt\Auditing\Contracts\Auditable;

class Purchase extends Model  implements Auditable
{
    use HasFactory;

    use \OwenIt\Auditing\Auditable;

    protected $table = 'purchases';

    protected $fillable = ['sup_country', 'p_date', 'ship_status', 'del_flg'];

    public function getPurchaseData()
    {
        return $purchases = Purchase::paginate(5);
    }

    public function getPurchaseDetail($id)
    {
        return Purchase::where('id',$id)->first();
    }

    public function getProduct()
    {
        return Product::get();
    }
}
