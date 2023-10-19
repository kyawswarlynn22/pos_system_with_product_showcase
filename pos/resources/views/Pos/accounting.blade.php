@extends('layout.sidebarandnav')

@section('title', 'Cash Sale');
@section('body')
    <p class=" text-2xl">Cash In Hand</p>

    <form action="/account" method="post">
        @csrf
        <div class=" flex items-center space-x-2 mt-5">
            <p>Start Date</p>
            <input name="start_date" type="date">
            <p>End Date</p>
            <input name="end_date" type="date">
            <button type="submit" class=" rounded-lg bg-yellow-400 px-3 py-1">Submit</button>
    </form>
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
                <td id="pur" class="px-6 text-center  py-4">
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
                <td id="cash" class="px-6 text-center  py-4">
                    {{ $cash }}
                </td>
            </tr>
            <tr class="bg-white  dark:bg-gray-800  hover:bg-gray-50 dark:hover:bg-gray-600">
                <th scope="row" class="px-6 text py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                    Deposit Sale
                </th>
                <td class="px-6 text-center  py-4">

                </td>
                <td id="deposit" class="px-6 text-center  py-4">
                    {{ $deposit }}
                </td>
            </tr>
            <tr class="bg-white  dark:bg-gray-800  hover:bg-gray-50 dark:hover:bg-gray-600">
                <th scope="row" class="px-6 text py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                    Expense
                </th>
                <td id="exp" class="px-6 text-center  py-4">
                    {{ $expense }}
                </td>
                <td class="px-6 text-center  py-4">

                </td>
            </tr>
            <tr class="bg-white border-b border-black  dark:bg-gray-800  hover:bg-gray-50 dark:hover:bg-gray-600">
                <th scope="row" class="px-6 text py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                    Income
                </th>
                <td class="px-6 text-center  py-4">

                </td>
                <td id="income" class="px-6 text-center  py-4">
                    {{ $income }}
                </td>
            </tr>
            <tr
                class="bg-white border-b border-black border-l border-r dark:bg-gray-800  hover:bg-gray-50 dark:hover:bg-gray-600">
                <th scope="row" class="px-6 text py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                    Subtotal
                </th>
                <td id="credit" class="px-6 text-center  py-4">

                </td>
                <td id="debit" class="px-6 text-center  py-4">

                </td>
            </tr>
        </tbody>
    </table>
    <div class="m-5 mt-20 flex justify-end space-x-5">
        <span class=" text-xl font-semibol mt-5">Balance: </span>
        <span id="balance" class="text-xl font-semibol mt-5">546587</span>
    </div>

    <script>
        var purchasestring = document.getElementById("pur").innerText;
        var cashstring = document.getElementById("cash").innerText;
        var depositstring = document.getElementById("deposit").innerText;
        var expensestring = document.getElementById("exp").innerText;
        var incomestring = document.getElementById("income").innerText;
        var credit = document.getElementById("credit");
        var debit = document.getElementById("debit");
        var total = document.getElementById('balance');

        var purchase = parseInt(purchasestring);
        var cash = parseInt(cashstring);
        var deposit = parseInt(depositstring);
        var expense = parseInt(expensestring);
        var income = parseInt(incomestring);

        var creditSubtotal = purchase + expense;
        var debitSubtotal = cash + deposit + income;
        var totalbal = debitSubtotal - creditSubtotal;


        credit.innerText = creditSubtotal.toLocaleString();
        debit.innerText = debitSubtotal.toLocaleString();
        total.innerText = totalbal.toLocaleString() + "Ks";
    </script>

@endsection
