@extends('layout.sidebarandnav')

@section('title', 'Sale Return Details');
@section('body')
    <p class=" text-2xl">Sale Return Details</p>
    <div class="mt-3 rounded-lg shadow-lg p-5">
        <span class=" text-lg">See Details : Ls001</span>
        <div class=" border-b "></div>
        <div class="flex justify-between">
            <div class=" flex-col flex ">
                <span class=" text-lg text-blue-500">Customer Info</span>
                <span>Kyaw Swar Lynn</span>
                <span>09-790655699</span>
                <span>Wakema</span>
            </div>
            <div class=" flex-col flex">
                <span class=" text-lg text-blue-500">Invoice Info</span>
                <span>Invoice No : Ls001</span>
                <span>Payment Status : Paid</span>

            </div>
        </div>
        <div class="mt-5">
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
                    <tr
                        class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">

                        <th scope="row"
                            class="px-6 text py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
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
                    <tr
                        class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">

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
                    <tr
                        class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">

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
                    <tr
                        class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">

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
                <span class=" font-semibold text-lg">2,500</span>
            </div>
            <div class="flex mt-5 space-x-3 ">
                <span class=" font-semibold text-lg">Grand Total : </span>
                <span class=" font-semibold text-lg">2,989,964</span>
            </div>
        </div>
       
    </div>
    </div>

@endsection
