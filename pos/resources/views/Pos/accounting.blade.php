@extends('layout.sidebarandnav')

@section('title', 'Cash Sale');
@section('body')
    <p class=" text-2xl">Cash In Hand</p>
    <div class=" flex items-center space-x-2 mt-5">
        <p>Start Date</p>
        <input type="date">
        <p>End Date</p>
        <input type="date">
        <button type="submit" class=" rounded-lg bg-yellow-400 px-3 py-1">Submit</button>
    </div>
    <table class="w-full mt-5 text-sm text-left text-gray-500 rounded-lg dark:text-gray-400">
        <thead class="text-xs text-white uppercase bg-blue-400  dark:bg-gray-700 dark:text-gray-400">
            <tr>

                <th scope="col" class="px-6 py-3 rounded-l-lg">
                    Description
                </th>
                <th scope="col" class="px-6 text-center  py-3">
                    Credit Amount
                </th>
                <th scope="col" class="px-6 text-center  py-3">
                    Debit Amount
                </th>
            </tr>
        </thead>
        <tbody>
            <tr class="bg-white  dark:bg-gray-800  hover:bg-gray-50 dark:hover:bg-gray-600">
                <th scope="row" class="px-6 text py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                    Purchase
                </th>
                <td class="px-6 text-center  py-4">
                    {{ $purchase }}
                </td>
                <td class="px-6 text-center  py-4">
                </td>
            </tr>
            <tr class="bg-white  dark:bg-gray-800  hover:bg-gray-50 dark:hover:bg-gray-600">
                <th scope="row" class="px-6 text py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                    CashSale
                </th>
                <td class="px-6 text-center  py-4">
                    
                </td>
                <td class="px-6 text-center  py-4">
                    {{ $cash }}
                </td>
            </tr>
            <tr class="bg-white  dark:bg-gray-800  hover:bg-gray-50 dark:hover:bg-gray-600">
                <th scope="row" class="px-6 text py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                    Deposit Sale
                </th>
                <td class="px-6 text-center  py-4">
                    {{ $deposit }}
                </td>
                <td class="px-6 text-center  py-4">
                    
                </td>
            </tr>
            <tr class="bg-white  dark:bg-gray-800  hover:bg-gray-50 dark:hover:bg-gray-600">
                <th scope="row" class="px-6 text py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                    Expense
                </th>
                <td class="px-6 text-center  py-4">
                    {{ $expense }}
                </td>
                <td class="px-6 text-center  py-4">
                    
                </td>
            </tr>
            <tr class="bg-white border-b dark:bg-gray-800  hover:bg-gray-50 dark:hover:bg-gray-600">
                <th scope="row" class="px-6 text py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                    Expense
                </th>
                <td class="px-6 text-center  py-4">
                    
                </td>
                <td class="px-6 text-center  py-4">
                    {{ $income }}
                </td>
            </tr>
        </tbody>
    </table>
    <div>
        <p class=" text-xl font-semibol mt-5">Cash In Hand Balance: 2560000Ks</p>
    </div>
@endsection
