@extends('layout.sidebarandnav')

@section('title', 'Preorder Sale');
@section('body')
    <p class=" text-2xl">Add Preorder Sale Invoice</p>

    <div class="flex space-x-5 p-5">
        <div class="mb-6 w-full">
            <label for="status" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Customer Name</label>
            <select name="status" id="status"
                class="bg-gray-50 border w-full border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                <option value="0">Ko Kyaw Swar Lynn</option>
                <option value="1">Ko Ye Min</option>
            </select>
        </div>
        <div class="mb-6 w-full ">
            <label for="purchasedate" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Sale Date
            </label>
            <input type="date" name="purchasedate" id="purchasedate"
                class="bg-gray-50 border w-full border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block  p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                placeholder="Category Name" required>
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
            <label for="purchasedate" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Product
                Quantity
            </label>
            <input type="number" name="purchasedate" id="purchasedate"
                class="bg-gray-50 border w-full border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block  p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                placeholder="Category Name" required>
        </div>
        <button class=" bg-yellow-400 text-white rounded-lg font-medium px-5 w-60 py-2">Add to list</button>
    </div>
    <div>
        <table class="w-full text-sm text-left text-gray-500 rounded-lg dark:text-gray-400">
            <thead class="text-xs text-white uppercase bg-blue-400  dark:bg-gray-700 dark:text-gray-400">
                <tr>

                    <th scope="col" class="px-6 py-3 rounded-l-lg">
                        Product Name
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Price per items
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Quantity
                    </th>

                    <th scope="col" class="px-6 py-3 rounded-r-lg">
                        Action
                    </th>
                </tr>
            </thead>
            <tbody>
                <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">

                    <th scope="row" class="px-6 text py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                        Apple MacBook Pro 17"
                    </th>
                    <td class="px-6 py-4">
                        Silver
                    </td>
                    <td class="px-6 py-4">
                        5
                    </td>

                    <td class="px-6 py-4 flex space-x-2">

                        <a href="#" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">
                            <svg width="24" height="24" viewBox="0 0 28 28" xmlns="http://www.w3.org/2000/svg">
                                <path fill="#ef4444"
                                    d="M11.5 6h5a2.5 2.5 0 0 0-5 0ZM10 6a4 4 0 0 1 8 0h6.25a.75.75 0 0 1 0 1.5h-1.31l-1.217 14.603A4.25 4.25 0 0 1 17.488 26h-6.976a4.25 4.25 0 0 1-4.235-3.897L5.06 7.5H3.75a.75.75 0 0 1 0-1.5H10ZM7.772 21.978a2.75 2.75 0 0 0 2.74 2.522h6.976a2.75 2.75 0 0 0 2.74-2.522L21.436 7.5H6.565l1.207 14.478ZM11.75 11a.75.75 0 0 1 .75.75v8.5a.75.75 0 0 1-1.5 0v-8.5a.75.75 0 0 1 .75-.75Zm5.25.75a.75.75 0 0 0-1.5 0v8.5a.75.75 0 0 0 1.5 0v-8.5Z" />
                            </svg>
                        </a>
                    </td>
                </tr>
                <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">

                    <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                        Microsoft Surface Pro
                    </th>
                    <td class="px-6 py-4">
                        White
                    </td>
                    <td class="px-6 py-4">
                        4
                    </td>

                    <td class="px-6 py-4 flex space-x-2">

                        <a href="#" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">
                            <svg width="24" height="24" viewBox="0 0 28 28" xmlns="http://www.w3.org/2000/svg">
                                <path fill="#ef4444"
                                    d="M11.5 6h5a2.5 2.5 0 0 0-5 0ZM10 6a4 4 0 0 1 8 0h6.25a.75.75 0 0 1 0 1.5h-1.31l-1.217 14.603A4.25 4.25 0 0 1 17.488 26h-6.976a4.25 4.25 0 0 1-4.235-3.897L5.06 7.5H3.75a.75.75 0 0 1 0-1.5H10ZM7.772 21.978a2.75 2.75 0 0 0 2.74 2.522h6.976a2.75 2.75 0 0 0 2.74-2.522L21.436 7.5H6.565l1.207 14.478ZM11.75 11a.75.75 0 0 1 .75.75v8.5a.75.75 0 0 1-1.5 0v-8.5a.75.75 0 0 1 .75-.75Zm5.25.75a.75.75 0 0 0-1.5 0v8.5a.75.75 0 0 0 1.5 0v-8.5Z" />
                            </svg>
                        </a>
                    </td>
                </tr>
                <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">

                    <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                        Magic Mouse 2
                    </th>
                    <td class="px-6 py-4">
                        Black
                    </td>
                    <td class="px-6 py-4">
                        2
                    </td>

                    <td class="px-6 py-4 flex space-x-2">

                        <a href="#" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">
                            <svg width="24" height="24" viewBox="0 0 28 28" xmlns="http://www.w3.org/2000/svg">
                                <path fill="#ef4444"
                                    d="M11.5 6h5a2.5 2.5 0 0 0-5 0ZM10 6a4 4 0 0 1 8 0h6.25a.75.75 0 0 1 0 1.5h-1.31l-1.217 14.603A4.25 4.25 0 0 1 17.488 26h-6.976a4.25 4.25 0 0 1-4.235-3.897L5.06 7.5H3.75a.75.75 0 0 1 0-1.5H10ZM7.772 21.978a2.75 2.75 0 0 0 2.74 2.522h6.976a2.75 2.75 0 0 0 2.74-2.522L21.436 7.5H6.565l1.207 14.478ZM11.75 11a.75.75 0 0 1 .75.75v8.5a.75.75 0 0 1-1.5 0v-8.5a.75.75 0 0 1 .75-.75Zm5.25.75a.75.75 0 0 0-1.5 0v8.5a.75.75 0 0 0 1.5 0v-8.5Z" />
                            </svg>
                        </a>
                    </td>
                </tr>
                <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">

                    <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                        Magic Mouse 2
                    </th>
                    <td class="px-6 py-4">
                        Black
                    </td>
                    <td class="px-6 py-4">
                        7
                    </td>

                    <td class="px-6 py-4 flex space-x-2">

                        <a href="#" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">
                            <svg width="24" height="24" viewBox="0 0 28 28" xmlns="http://www.w3.org/2000/svg">
                                <path fill="#ef4444"
                                    d="M11.5 6h5a2.5 2.5 0 0 0-5 0ZM10 6a4 4 0 0 1 8 0h6.25a.75.75 0 0 1 0 1.5h-1.31l-1.217 14.603A4.25 4.25 0 0 1 17.488 26h-6.976a4.25 4.25 0 0 1-4.235-3.897L5.06 7.5H3.75a.75.75 0 0 1 0-1.5H10ZM7.772 21.978a2.75 2.75 0 0 0 2.74 2.522h6.976a2.75 2.75 0 0 0 2.74-2.522L21.436 7.5H6.565l1.207 14.478ZM11.75 11a.75.75 0 0 1 .75.75v8.5a.75.75 0 0 1-1.5 0v-8.5a.75.75 0 0 1 .75-.75Zm5.25.75a.75.75 0 0 0-1.5 0v8.5a.75.75 0 0 0 1.5 0v-8.5Z" />
                            </svg>
                        </a>
                    </td>
                </tr>

            </tbody>
        </table>

    </div>
    <div class=" mt-5 flex  flex-col justify-end items-end">
       <div class="flex mt-5 space-x-3  ">
        <span class=" font-semibold text-lg">Discount : </span>
        <input readonly value="4566" type="number" class=" rounded-lg" name="discount" id="">
       </div>
        <div class="flex mt-5 space-x-3 ">
            <span class=" font-semibold text-lg">Grand Total : </span>
        <input readonly type="number" class=" rounded-lg" name="grandtotal" id="">
        </div>
     
    </div>
    <div class="mt-15 mb-5 flex flex-col">
        <label for="description">Remarks</label>
        <textarea name="remark" id="" cols="100" rows="2"></textarea>
    </div>
    <span class="mt-5 ml-[83%]">
        <button class=" bg-yellow-400 text-white rounded-lg font-medium px-5 py-2">Submit</button>
        <button class=" bg-gray-400 rounded-lg font-medium px-5 py-2">Cancel</button>
    </span>
    </div>
@endsection
