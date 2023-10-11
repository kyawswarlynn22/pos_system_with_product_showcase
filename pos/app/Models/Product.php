<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use OwenIt\Auditing\Contracts\Auditable;

class Product extends Model implements Auditable
{
    use HasFactory;

    use \OwenIt\Auditing\Auditable;

    protected $table = 'products';

    protected $fillable = [
        'product_name', 'p_code', 'categories_id', 'sub_categories_id ', 'p_one',
        'p_two', 'p_three', 'p_four', 'price', 'quantity', 'description'
    ];

    public function productAllData()
    {
        return $product = Product::select(
            'products.id',
            'categories.c_name',
            'sub_categories.sub_c_name',
            'product_name',
            'p_code',
            'p_one',
            'p_two',
            'p_three',
            'p_four',
            'price',
            'quantity',
            'products.description'
        )
            ->join('categories', 'categories_id', 'categories.id')
            ->join('sub_categories', 'sub_categories_id', 'sub_categories.id')
            ->where('stock_confrim', 1)
            ->orderBy('products.id', 'desc')
            ->paginate(5);
    }

    public function productPending()
    {
        return $product = Product::select(
            'products.id',
            'categories.c_name',
            'sub_categories.sub_c_name',
            'product_name',
            'p_code',
            'p_one',
            'p_two',
            'p_three',
            'p_four',
            'price',
            'quantity',
            'products.description'
        )
            ->join('categories', 'categories_id', 'categories.id')
            ->join('sub_categories', 'sub_categories_id', 'sub_categories.id')
            ->where('stock_confrim', 0)
            ->orderBy('products.id', 'desc')
            ->paginate(5);
    }

    public function productDetails($id)
    {
        return Product::select(
            'products.id',
            'sub_categories.id',
            'categories.id',
            'categories.c_name',
            'sub_categories.sub_c_name',
            'product_name',
            'p_code',
            'p_one',
            'p_two',
            'p_three',
            'p_four',
            'price',
            'quantity',
            'products.description'
        )
            ->join('categories', 'categories_id', 'categories.id')
            ->join('sub_categories', 'sub_categories_id', 'sub_categories.id')
            ->where('products.id', $id)
            ->first();
    }

    public function productEdit($id)
    {
        return Product::where('id', $id)->first();
    }

    public function updateStock($id)
    {
        $productDetail = Product::find($id);
        if ($productDetail) {
            $productDetail->update([
                $productDetail->stock_confrim = 1,
            ]);
        }
        return back();
    }
}
