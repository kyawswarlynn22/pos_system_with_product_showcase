@extends('layout.sidebarandnav')

@section('title', 'Add Product');
@section('body')
    <p class=" text-2xl">Add Product</p>
    <div class="mt-3 rounded-lg shadow-lg p-5">
        <div class="flex w-full justify-around items-center space-x-3 p-5">
            <div class="mb-6 w-full ">
                <label for="code" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                    Product Code
                </label>
                <input type="number" name="code" id="code"
                    class="bg-gray-50 border w-full border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block  p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                    placeholder="Product Code" required>
            </div>
            <div class="mb-6 w-full ">
                <label for="product_name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                    Product Name
                </label>
                <input type="text" name="product_name" id="product_name"
                    class="bg-gray-50 border w-full border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block  p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                    placeholder="Product Name" required>
            </div>
            <div class="mb-6 w-full">
                <label for="category" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Category </label>
                <select name="category" id="category"
                    class="bg-gray-50 border w-full border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                    <option value="0">Battery</option>
                    <option value="1">Inverter</option>
                    <option value="2">Solar</option>
                </select>
            </div>

        </div>
        <div class="flex space-x-3 p-5 w-full justify-items-center items-center">
            <div class="mb-6 w-full">
                <label for="subcategory" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Subcategory Name</label>
                <select name="subcategory" id="subcategory"
                    class="bg-gray-50 border w-full border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                    <option value="0">Lipo 4</option>
                    <option value="1">Mono Cell</option>
                    <option value="2">Hybrid Inverter</option>
                </select>
            </div>
            <div class="mb-6 w-full ">
                <label for="price" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                    Selling Price
                </label>
                <input type="number" name="price" id="price"
                    class="bg-gray-50 border w-full border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block  p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                    placeholder="Selling price" required>
            </div>
            <div class="mb-6 w-full ">
                <label for="quantity" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                   Quantity
                </label>
                <input type="number" name="quantity" id="quantity"
                    class="bg-gray-50 border w-full border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block  p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                    placeholder="Product Name" required>
            </div>
        </div>
        <div class="mt-50 p-5 mb-5  flex flex-col">
            <label for="description"> Description</label>
            <textarea name="description" class=" rounded-lg " name="description" id="" cols="100" rows="2">vbro</textarea>
        </div>
        <div class=" p-5">
            <p class="py-3">Product Image</p>
                <div class=" w-56 h-56 rounded-lg shadow-xl outline-dashed flex flex-col justify-center items-center outline-gray-400">
                    <label for="photo2 ">
                        <img class="h-20" src="{{ asset('images/upload-filled.svg') }}" id="photoimg2" alt="">
                    </label>
                    <p>Click to upload photo</p>
                    <p>SVG,JPG or PNG</p>
                    <input type="file" class=" hidden" id="photo2" accept=".png,.jpeg,.svg" name="photo2">
                </div>
            </div>
        </div>
        <span class="mt-5 ml-[83%]">
            <button class=" bg-yellow-400 text-white rounded-lg font-medium px-5 py-2">Submit</button>
            <button class=" bg-gray-400 rounded-lg font-medium px-5 py-2">Cancel</button>
        </span>
    </div>




@endsection
