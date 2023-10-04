<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $categoryListClass = new Category();
        $categoryList = $categoryListClass->categoryList();
        return view('Pos.categoryList', [
            'categoryList' => $categoryList
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('Pos.addCategory');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $categoryUpdateClass = new Category();
        $categoryUpdate = $categoryUpdateClass->categoryDetail($id);
        if ($categoryUpdate == null) {
            return view('error.404');
        }
        return view('Pos.editCategory', [
            'categoryDetail' => $categoryUpdate
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $validateData = $request->validate([
            'categoryName' => 'required',
            'description' => 'description',
        ]);
        $categoryUpdateClass = new Category();
        $categoryUpdate = $categoryUpdateClass->categoryUpdate($request, $id);
        return redirect('/category');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Category $category)
    {
        //
    }
}
