@extends('layout.sidebarandnav')

@section('title', 'Expense and Income List');
@section('body')
    <p class=" text-2xl">Expense and Income List</p>

    <div class="relative overflow-x-auto shadow-md sm:rounded-lg p-5">
        <span class=" font-semibold pb-5">Expense List</span>
        <div class="pb-4 pt-4 bg-white dark:bg-gray-900">
            <label for="table-search" class="sr-only">Search</label>
            <div class="relative mt-1">
                <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                    <svg class="w-4 h-4 text-gray-500 dark:text-gray-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                        fill="none" viewBox="0 0 20 20">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z" />
                    </svg>
                </div>
                <input type="text" id="table-search"
                    class="block p-2 pl-10 text-sm text-gray-900 border border-gray-300 rounded-lg w-80 bg-gray-50 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                    placeholder="Search...">
            </div>
        </div>
        <table class="w-full text-sm text-left text-gray-500 rounded-lg dark:text-gray-400">
            <thead class="text-xs text-white uppercase bg-blue-400  dark:bg-gray-700 dark:text-gray-400">
                <tr>

                    <th scope="col" class="px-6 py-3 rounded-l-lg">
                        Description
                    </th>
                    <th scope="col" class="px-6 text-center  py-3">
                        Added By
                    </th>
                    <th scope="col" class="px-6 text-center  py-3">
                        Date
                    </th>
                    <th scope="col" class="px-6 text-center  py-3">
                        Amount
                    </th>
                    <th scope="col" class="px-6 text-center  py-3 ">
                        Status
                    </th>
                    <th scope="col" class="px-6 py-3 text-center  rounded-r-lg">
                        Action
                    </th>
                </tr>
            </thead>
            <tbody>
                <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">

                    <th scope="row" class="px-6 text py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                        Taxi
                    </th>
                    <td class="px-6 text-center  py-4">
                        AKZ
                    </td>
                    <td class="px-6 text-center  py-4">
                        26-9-2023
                    </td>
                    <td class="px-6 text-center  py-4">
                        2,030,205
                    </td>
                    <td class="px-6 text-center py-4">
                        <p class=" text-red-500 font-semibold">Expense</p>
                    </td>
                    <td class="px-6 py-4 flex justify-center space-x-2 ">
                     
                        <a href="/depositsale//edit" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">
                            <svg width="24" height="24" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                <g fill="none" stroke="#3b82f6" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="2">
                                    <path d="M7 7H6a2 2 0 0 0-2 2v9a2 2 0 0 0 2 2h9a2 2 0 0 0 2-2v-1" />
                                    <path d="M20.385 6.585a2.1 2.1 0 0 0-2.97-2.97L9 12v3h3l8.385-8.415zM16 5l3 3" />
                                </g>
                            </svg>
                        </a>
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
        <nav class="flex items-center justify-between pt-4" aria-label="Table navigation">
            <span class="text-sm font-normal text-gray-500 dark:text-gray-400">Showing <span
                    class="font-semibold text-gray-900 dark:text-white">1-10</span> of <span
                    class="font-semibold text-gray-900 dark:text-white">1000</span></span>
            <ul class="inline-flex -space-x-px text-sm h-8">
                <li>
                    <a href="#"
                        class="flex items-center justify-center px-3 h-8 ml-0 leading-tight text-gray-500 bg-white border border-gray-300 rounded-l-lg hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">Previous</a>
                </li>
                <li>
                    <a href="#"
                        class="flex items-center justify-center px-3 h-8 leading-tight text-gray-500 bg-white border border-gray-300 hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">1</a>
                </li>
                <li>
                    <a href="#"
                        class="flex items-center justify-center px-3 h-8 leading-tight text-gray-500 bg-white border border-gray-300 hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">2</a>
                </li>
                <li>
                    <a href="#" aria-current="page"
                        class="flex items-center justify-center px-3 h-8 text-blue-600 border border-gray-300 bg-blue-50 hover:bg-blue-100 hover:text-blue-700 dark:border-gray-700 dark:bg-gray-700 dark:text-white">3</a>
                </li>
                <li>
                    <a href="#"
                        class="flex items-center justify-center px-3 h-8 leading-tight text-gray-500 bg-white border border-gray-300 hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">4</a>
                </li>
                <li>
                    <a href="#"
                        class="flex items-center justify-center px-3 h-8 leading-tight text-gray-500 bg-white border border-gray-300 hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">5</a>
                </li>
                <li>
                    <a href="#"
                        class="flex items-center justify-center px-3 h-8 leading-tight text-gray-500 bg-white border border-gray-300 rounded-r-lg hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">Next</a>
                </li>
            </ul>
        </nav>
    </div>
    <div class="relative overflow-x-auto shadow-md sm:rounded-lg p-5">
        <span class=" font-semibold pb-5">Income List</span>
        <div class="pb-4 pt-4 bg-white dark:bg-gray-900">
            <label for="table-search" class="sr-only">Search</label>
            <div class="relative mt-1">
                <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                    <svg class="w-4 h-4 text-gray-500 dark:text-gray-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                        fill="none" viewBox="0 0 20 20">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z" />
                    </svg>
                </div>
                <input type="text" id="table-search"
                    class="block p-2 pl-10 text-sm text-gray-900 border border-gray-300 rounded-lg w-80 bg-gray-50 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                    placeholder="Search...">
            </div>
        </div>
        <table class="w-full text-sm text-left text-gray-500 rounded-lg dark:text-gray-400">
            <thead class="text-xs text-white uppercase bg-blue-400  dark:bg-gray-700 dark:text-gray-400">
                <tr>

                    <th scope="col" class="px-6 py-3 rounded-l-lg">
                        Description
                    </th>
                    <th scope="col" class="px-6 text-center  py-3">
                        Added By
                    </th>
                    <th scope="col" class="px-6 text-center  py-3">
                        Date
                    </th>
                    <th scope="col" class="px-6 text-center  py-3">
                        Amount
                    </th>
                    <th scope="col" class="px-6 text-center  py-3 ">
                        Status
                    </th>
                    <th scope="col" class="px-6 py-3 text-center  rounded-r-lg">
                        Action
                    </th>
                </tr>
            </thead>
            <tbody>
                <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">

                    <th scope="row" class="px-6 text py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                        Taxi
                    </th>
                    <td class="px-6 text-center  py-4">
                        AKZ
                    </td>
                    <td class="px-6 text-center  py-4">
                        26-9-2023
                    </td>
                    <td class="px-6 text-center  py-4">
                        2,030,205
                    </td>
                    <td class="px-6 text-center py-4">
                        <p class=" text-red-500 font-semibold">Expense</p>
                    </td>
                    <td class="px-6 py-4 flex justify-center space-x-2 ">
                     
                        <a href="/depositsale//edit" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">
                            <svg width="24" height="24" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                <g fill="none" stroke="#3b82f6" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="2">
                                    <path d="M7 7H6a2 2 0 0 0-2 2v9a2 2 0 0 0 2 2h9a2 2 0 0 0 2-2v-1" />
                                    <path d="M20.385 6.585a2.1 2.1 0 0 0-2.97-2.97L9 12v3h3l8.385-8.415zM16 5l3 3" />
                                </g>
                            </svg>
                        </a>
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
        <nav class="flex items-center justify-between pt-4" aria-label="Table navigation">
            <span class="text-sm font-normal text-gray-500 dark:text-gray-400">Showing <span
                    class="font-semibold text-gray-900 dark:text-white">1-10</span> of <span
                    class="font-semibold text-gray-900 dark:text-white">1000</span></span>
            <ul class="inline-flex -space-x-px text-sm h-8">
                <li>
                    <a href="#"
                        class="flex items-center justify-center px-3 h-8 ml-0 leading-tight text-gray-500 bg-white border border-gray-300 rounded-l-lg hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">Previous</a>
                </li>
                <li>
                    <a href="#"
                        class="flex items-center justify-center px-3 h-8 leading-tight text-gray-500 bg-white border border-gray-300 hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">1</a>
                </li>
                <li>
                    <a href="#"
                        class="flex items-center justify-center px-3 h-8 leading-tight text-gray-500 bg-white border border-gray-300 hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">2</a>
                </li>
                <li>
                    <a href="#" aria-current="page"
                        class="flex items-center justify-center px-3 h-8 text-blue-600 border border-gray-300 bg-blue-50 hover:bg-blue-100 hover:text-blue-700 dark:border-gray-700 dark:bg-gray-700 dark:text-white">3</a>
                </li>
                <li>
                    <a href="#"
                        class="flex items-center justify-center px-3 h-8 leading-tight text-gray-500 bg-white border border-gray-300 hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">4</a>
                </li>
                <li>
                    <a href="#"
                        class="flex items-center justify-center px-3 h-8 leading-tight text-gray-500 bg-white border border-gray-300 hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">5</a>
                </li>
                <li>
                    <a href="#"
                        class="flex items-center justify-center px-3 h-8 leading-tight text-gray-500 bg-white border border-gray-300 rounded-r-lg hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">Next</a>
                </li>
            </ul>
        </nav>
    </div>
@endsection
