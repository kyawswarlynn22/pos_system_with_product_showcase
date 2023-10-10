@extends('layout.sidebarandnav')

@section('title', 'Edit Subcategory');
@section('body')
@php
   $categoryList =  session('categoryList')
@endphp

    <p class=" text-2xl">Edit  Subcategory</p>
    <div class="mt-3 rounded-lg shadow-lg p-5">
        <span class=" font-semibold ">Edit Subcategory</span>
        <div class="flex w-full justify-around items-center space-x-3 p-5">
            <div class="mb-6 w-full ">
                <label for="categoryName" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Category
                    Name</label>
                <input type="text" name="categoryName" id="categoryName" value="{{ $subCategory->sub_c_name }}"
                    class="bg-gray-50 border w-full border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block  p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                    placeholder="Category Name" required>
            </div>
            <div class="mb-6 w-full">
                <label for="gender" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Select Main Category</label>
                <select name="gender" id="gender"
                    class="bg-gray-50 border w-full border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                    >
                    @forelse ($categoryallList as $category)
                        <option value="{{ $category->id }}" @if ($category->id == $subCategory->category_id )
                            selected
                        @endif >{{ $category->c_name }}</option>
                    @empty
                        <span class=" text-red-500 font-bold">No Sub Category Data</span>
                    @endforelse
                </select>
            </div>
            
        </div>
        
        <div class="mb-6 w-full p-5">
            <label for="description"
                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Description</label>
            <input type="textarea"  name="categoryDescription" id="description" value="{{ $subCategory->description }}"
                class="bg-gray-50 border outline-none w-full border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block  p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                placeholder="Description">
        </div>
        <span class=" ml-[82%]">
            <button class=" bg-yellow-400 text-white rounded-lg font-medium px-5 py-2">Update</button>
            <button class=" bg-gray-400 rounded-lg font-medium px-5 py-2">Cancel</button>
        </span>
    </div>
@endsection
