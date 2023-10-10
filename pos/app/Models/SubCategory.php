<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use OwenIt\Auditing\Contracts\Auditable;

class SubCategory extends Model implements Auditable
{
    use HasFactory;

    use \OwenIt\Auditing\Auditable;

    protected $table = 'sub_categories';

    protected $fillable = ['sub_c_name', 'category_id', 'description'];



    public function category()
    {
        return $this->belongsTo(Category::class);
    }


    public function addSubcategory($request)
    {
        $subCategory = new SubCategory();
        $subCategory->sub_c_name = $request->subcategoryName;
        $subCategory->category_id = $request->mainCategory_id;
        $subCategory->description = $request->sub_description;
        $subCategory->save();
    }

    public function subCategoryList()
    {
        return $subCategory = SubCategory::select('sub_c_name', 'categories.c_name', 'sub_categories.description', 'sub_categories.id')
            ->join('categories', 'sub_categories.category_id', 'categories.id')
            ->orderBy('sub_categories.id', 'desc')
            ->paginate(5);
    }

    public function editsubCatgory($id)
    {
        return SubCategory::where('id',$id)->first();
    }

    public function updateCategory($id)
    {
        $updateSubcategory = SubCategory::find($id);
        if ($updateSubcategory) {
            $updateSubcategory->update([]);
        }
    }
}
