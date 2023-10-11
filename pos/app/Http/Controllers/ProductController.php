<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use App\Models\SubCategory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $productAllDataClass = new Product();
        $productAllData = $productAllDataClass->productAllData();
        return view('Pos.productList',[
            'productData' => $productAllData ] );
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categoryListClass = new Category();
        $categoryList = $categoryListClass->categoryallList();

        $subcategoryListClass = new SubCategory();
        $subcategoryList = $subcategoryListClass->subCategoryAllList();

        return view('Pos.addProduct', [
            'categorylist' => $categoryList,
            'subcategorylist' => $subcategoryList,
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request,)
    {
        $validateData = $request->validate([
            'p_code' => 'required',
            'product_name' => 'required',
            'price' => 'required',
            'quantity' => 'required',
            'description' => 'required',
            'photo1' => 'required',
        ]);

        $extension = "https://kyawswar.s3.ap-southeast-1.amazonaws.com/";
        $pathOne = $pathTwo = $pathThree = $pathFour = null;
        if ($request->hasFile('photo1')) {
            $path_one = $request->file('photo1')->storePublicly('public/images');
            $pathOne = $extension . $path_one;
        }
        if ($request->hasFile('photo2')) {
            $path_two = $request->file('photo2')->storePublicly('public/images');
            $pathTwo = $extension . $path_two;
        }
        if ($request->hasFile('photo2')) {
            $path_three = $request->file('photo3')->storePublicly('public/images');
            $pathThree = $extension . $path_three;
        }
        if ($request->hasFile('photo2')) {
            $path_four = $request->file('photo4')->storePublicly('public/images');
            $pathFour = $extension . $path_four;
        }

        $product = new Product();
        $product->product_name = $request->product_name;
        $product->p_code = $request->p_code;
        $product->categories_id = $request->category;
        $product->sub_categories_id = $request->subcategory;
        $product->p_one = $pathOne;
        $product->p_two = $pathTwo;
        $product->p_three = $pathThree;
        $product->p_four = $pathFour;
        $product->price = $request->price;
        $product->quantity = $request->quantity;
        $product->description = $request->description;
        $product->save();

        return redirect('/product/create')->withSuccess('Added Product Succefully');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $productDetailClass = new Product();
        $productDetail = $productDetailClass->productDetails($id);
        return view('Pos.productDetails',[
            'productDetail' => $productDetail ,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
