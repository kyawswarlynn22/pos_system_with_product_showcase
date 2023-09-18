@extends('layout.sidebarandnav')

@section('title', 'Add Purchase');
@section('body')
    <p class=" text-2xl">Add Purchase</p>
    <div class="mt-3 rounded-lg shadow-lg p-5">
        <div class="flex w-full justify-around items-center space-x-3 p-5">
            <div class="mb-6 w-full">
                <label for="gender" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Supplier
                    Country</label>
                <select name="gender" id="gender"
                    class="bg-gray-50 border w-full border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                    <option value="0">Local</option>
                    <option value="1">China</option>
                </select>
            </div>
            <div class="mb-6 w-full ">
                <label for="purchasedate" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Puchase Date
                </label>
                <input type="date" name="purchasedate" id="purchasedate"
                    class="bg-gray-50 border w-full border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block  p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                    placeholder="Category Name" required>
            </div>
            <div class="mb-6 w-full">
                <label for="status" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Shipping
                    Status</label>
                <select name="status" id="status"
                    class="bg-gray-50 border w-full border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                    <option value="0">Pending</option>
                    <option value="1">Received</option>
                </select>
            </div>
            
        </div>
        <div class="flex space-x-3 p-5 w-8/12 justify-items-center items-center">
            <div class="mb-6 w-full">
                <label for="product" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Product Name</label>
                <select name="product" id="product"
                    class="bg-gray-50 border w-full border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                    <option value="0">Battery</option>
                    <option value="1">Inverter</option>
                    <option value="2">Solar</option>
                </select>
            </div>
            <div class="mb-6 w-full ">
                <label for="purchasedate" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Puchase
                    Quantity
                </label>
                <input type="number" name="purchasedate" id="purchasedate"
                    class="bg-gray-50 border w-full border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block  p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                    placeholder="Category Name" required>
            </div>
            <button class=" bg-yellow-400 text-white rounded-lg font-medium px-5 w-60 py-2">Add to list</button>
        </div>
        <span class=" ml-[82%]">
            <button class=" bg-yellow-400 text-white rounded-lg font-medium px-5 py-2">Submit</button>
            <button class=" bg-gray-400 rounded-lg font-medium px-5 py-2">Cancel</button>
        </span>
    </div>




@endsection
