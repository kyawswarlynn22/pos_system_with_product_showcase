@extends('layout.sidebarandnav')

@section('title', 'Add Category');
@section('body')
    <p class=" text-2xl">Add Expense and Income</p>
    <div class="mt-3 rounded-lg shadow-lg p-5">
        <span class=" font-semibold text-lg ">Add Expense</span>
        <div class="flex w-full justify-around items-center space-x-3 p-5">
            <div class="mb-6 w-full">
                <label for="status" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Customer Name</label>
                <select name="status" id="status"
                    class="bg-gray-50 border w-full border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                    <option value="0">Ko Kyaw Swar Lynn</option>
                    <option value="1">Ko Ye Min</option>
                </select>
            </div>
            <div class="mb-6 w-full">
                <label for="description"
                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Description</label>
                <input type="text" name="categoryDescription" id="description"
                    class="bg-gray-50 border w-full border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block  p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                    placeholder="Description">
            </div>
            <div class="mb-6 w-full">
                <label for="description"
                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Date</label>
                <input type="date" name="categoryDescription" id="description"
                    class="bg-gray-50 border w-full border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block  p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                    placeholder="Description">
            </div>
            <div class="mb-6 w-full">
                <label for="description"
                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Amount</label>
                <input type="number" name="categoryDescription" id="description"
                    class="bg-gray-50 border w-full border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block  p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                    placeholder="Amount">
            </div>
            
        </div>
        <span class=" ml-[82%]">
            <button class=" bg-yellow-400 text-white rounded-lg font-medium px-5 py-2">Submit</button>
            <button class=" bg-gray-400 rounded-lg font-medium px-5 py-2">Cancel</button>
        </span>
    </div>
    <div class="mt-3 rounded-lg shadow-lg p-5">
        <span class=" font-semibold text-lg ">Add Income</span>
        <div class="flex w-full justify-around items-center space-x-3 p-5">
            <div class="mb-6 w-full">
                <label for="status" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Customer Name</label>
                <select name="status" id="status"
                    class="bg-gray-50 border w-full border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                    <option value="0">Ko Kyaw Swar Lynn</option>
                    <option value="1">Ko Ye Min</option>
                </select>
            </div>
            <div class="mb-6 w-full">
                <label for="description"
                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Description</label>
                <input type="text" name="categoryDescription" id="description"
                    class="bg-gray-50 border w-full border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block  p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                    placeholder="Description">
            </div>
            <div class="mb-6 w-full">
                <label for="description"
                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Date</label>
                <input type="date" name="categoryDescription" id="description"
                    class="bg-gray-50 border w-full border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block  p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                    placeholder="Description">
            </div>
            <div class="mb-6 w-full">
                <label for="description"
                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Amount</label>
                <input type="number" name="categoryDescription" id="description"
                    class="bg-gray-50 border w-full border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block  p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                    placeholder="Amount">
            </div>
            
        </div>
        <span class=" ml-[82%]">
            <button class=" bg-yellow-400 text-white rounded-lg font-medium px-5 py-2">Submit</button>
            <button class=" bg-gray-400 rounded-lg font-medium px-5 py-2">Cancel</button>
        </span>
    </div>
    
@endsection
