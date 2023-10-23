@extends('layout.sidebarandnav')

@section('title', 'Cash Sale');
@section('body')
    <div>
        <p class=" text-2xl">Daily In and Out Balance</p>

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
    @php
        $timezone = 'Asia/Yangon';
        $currentDateTime = \Carbon\Carbon::now($timezone);
        $currentDateFormatted = $currentDateTime->format('Y-m-d');
    @endphp
    <form class=" float-right -mt-14" action="/saleClosing" method="post">
        @csrf
        <input type="text" class="" hidden name="grand_total" id="grandtotalamt">
        @if ($currentDateFormatted == $salecolse->crdate_only)
            <input type="text" hidden name="update">
            <button class=" float-right bg-blue-500 rounded-lg px-3 py-1">Closed Update?</button>
        @else
            <button class=" float-right bg-red-500 rounded-lg px-3 py-1">Balance Closing</button>
        @endif
    </form>
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
            <tr class="bg-white  border-black  dark:bg-gray-800  hover:bg-gray-50 dark:hover:bg-gray-600">
                <th scope="row" class="px-6 text py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                    Income
                </th>
                <td class="px-6 text-center  py-4">

                </td>
                <td id="income" class="px-6 text-center  py-4">
                    {{ $income }}
                </td>
            </tr>
            <tr class="bg-white border-b border-black  dark:bg-gray-800  hover:bg-gray-50 dark:hover:bg-gray-600">
                <th scope="row" class="px-6 text py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                    SaleReturn
                </th>
                <td id="salereturn" class="px-6 text-center  py-4">
                    {{ $salereturn }}
                </td>
                <td class="px-6 text-center  py-4">

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
    
    </div>
    <div class=" p-5 shadow-lg w-1/2 rounded-2xl mt-10 bg-gray-400 mb-20">
        <span class=" text-2xl">Cash In Hand Balance: </span>
        <span class=" text-2xl" id="cashinhand">{{ $cashinhand }} </span>MMK
    </div>
    <script>
        var purchasestring = document.getElementById("pur").innerText;
        var cashstring = document.getElementById("cash").innerText;
        var depositstring = document.getElementById("deposit").innerText;
        var expensestring = document.getElementById("exp").innerText;
        var incomestring = document.getElementById("income").innerText;
        var saleturnstring = document.getElementById('salereturn').innerText;
        var credit = document.getElementById("credit");
        var debit = document.getElementById("debit");
        var total = document.getElementById('balance');
        var grand_total_value = document.getElementById('grandtotalamt');
        var cih = document.getElementById('cashinhand');


        var purchase = parseInt(purchasestring);
        var cash = parseInt(cashstring);
        var deposit = parseInt(depositstring);
        var expense = parseInt(expensestring);
        var income = parseInt(incomestring);
        var salereturn = parseInt(saleturnstring);
        var cashinhand = parseInt(cih.innerText);


        var creditSubtotal = purchase + expense + salereturn;
        var debitSubtotal = cash + deposit + income;
        var totalbal = debitSubtotal - creditSubtotal;
        grand_total_value.value = totalbal;

      
        credit.innerText = creditSubtotal.toLocaleString();
        debit.innerText = debitSubtotal.toLocaleString();
        total.innerText = totalbal.toLocaleString() + "Ks";
        cih.innerText = cashinhand.toLocaleString();
        
    </script>

@endsection
