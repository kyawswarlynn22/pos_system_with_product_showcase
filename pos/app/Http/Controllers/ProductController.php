<?php

namespace App\Http\Controllers;

use App\Models\Category;
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
        $categoryListClass = new Category();
        $categoryList = $categoryListClass->categoryallList();

        $subcategoryListClass = new SubCategory();
        $subcategoryList = $subcategoryListClass->subCategoryAllList();
        dd($categoryList, $subcategoryList);
        return view('Pos.productList', [
            'categorylist' => $categoryList,
            'subcategorylist' => $subcategoryList,
        ]);
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
    public function store(Request $request)
    {

        $path = $request->file('photo1')->storePublicly('public/images');
        dd("https://kyawswar.s3.ap-southeast-1.amazonaws.com/",$path);
       
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
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
