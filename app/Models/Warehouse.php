<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use OwenIt\Auditing\Contracts\Auditable;

class Warehouse extends Model implements Auditable
{
    use HasFactory;

    use \OwenIt\Auditing\Auditable;

    public $timestamps = false;

    protected $table = 'warehouse_product';

    protected $fillable = ['product_name', 'buy_price', 'quantity', 'del_flg'];

    public function addProducts($request)
    {
        $addProduct = new Warehouse();
        $addProduct->product_name = $request->product_name;
        $addProduct->buy_price = $request->price;
        $addProduct->quantity = $request->quantity;
        $addProduct->save();
    }

    public function getProductList()
    {
        return Warehouse::where('del_flg', 0)->paginate(8);
    }

    public function getProductDetail($id)
    {
        return  $productDetail = Warehouse::where('id',$id)->first();
    }

    public function productDel($id)
    {
        $productDel = Warehouse::find($id);
        $productDel->delete();
      
    }
}
