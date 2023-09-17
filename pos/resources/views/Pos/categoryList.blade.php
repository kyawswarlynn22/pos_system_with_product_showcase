@extends('layout.sidebarandnav')

@section('title', 'Category List');
@section('body')
    <div>
        <span class="text-2xl font-medium">Category List</span>
        <div class="mt-3 rounded-lg shadow-lg p-5">
            <span class=" font-semibold text-lg ">Main Category List</span>
            <div class="relative overflow-x-auto shadow-md sm:rounded-lg mt-3">
                <table class="w-full text-sm text-left  text-gray-500 dark:text-gray-400">
                    <thead class="text-xs text-white  uppercase bg-blue-800 dark:bg-gray-700 dark:text-gray-400">
                        <tr>
                            <th scope="col" class="px-6 py-3">
                                Category Name
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Description
                            </th>

                            <th scope="col" class="px-6 float-right py-3">
                                
                                Action
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr
                            class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                            <th scope="row"
                                class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                Apple MacBook Pro 17"
                            </th>
                            <td class="px-6 py-4">
                                Silver
                            </td>

                            <td class="px-6 py-4 text-right">
                                <a href="#"
                                    class="font-medium float-right text-blue-600 dark:text-blue-500 hover:underline">
                                    <svg width="24" height="24" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                        <g fill="none" stroke="#3b82f6" stroke-linecap="round" stroke-linejoin="round" stroke-width="2">
                                            <path d="M7 7H6a2 2 0 0 0-2 2v9a2 2 0 0 0 2 2h9a2 2 0 0 0 2-2v-1"/>
                                            <path d="M20.385 6.585a2.1 2.1 0 0 0-2.97-2.97L9 12v3h3l8.385-8.415zM16 5l3 3"/>
                                        </g>
                                    </svg>
                                </a>
                            </td>
                        </tr>
                        <tr
                            class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                            <th scope="row"
                                class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                Microsoft Surface Pro
                            </th>
                            <td class="px-6 py-4">
                                White
                            </td>

                            <td class="px-6 py-4 text-right">
                                <a href="#"
                                    class="font-medium float-right text-blue-600 dark:text-blue-500 hover:underline">
                                    <svg width="24" height="24" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                        <g fill="none" stroke="#3b82f6" stroke-linecap="round" stroke-linejoin="round" stroke-width="2">
                                            <path d="M7 7H6a2 2 0 0 0-2 2v9a2 2 0 0 0 2 2h9a2 2 0 0 0 2-2v-1"/>
                                            <path d="M20.385 6.585a2.1 2.1 0 0 0-2.97-2.97L9 12v3h3l8.385-8.415zM16 5l3 3"/>
                                        </g>
                                    </svg>
                                </a>
                            </td>
                        </tr>
                        <tr class="bg-white dark:bg-gray-800 hover:bg-gray-50 dark:hover:bg-gray-600">
                            <th scope="row"
                                class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                Magic Mouse 2
                            </th>
                            <td class="px-6 py-4">
                                Black
                            </td>

                            <td class="px-6 py-4 text-right">
                                <a href="#"
                                    class="font-medium float-right text-blue-600 dark:text-blue-500 hover:underline">
                                    <svg width="24" height="24" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                        <g fill="none" stroke="#3b82f6" stroke-linecap="round" stroke-linejoin="round" stroke-width="2">
                                            <path d="M7 7H6a2 2 0 0 0-2 2v9a2 2 0 0 0 2 2h9a2 2 0 0 0 2-2v-1"/>
                                            <path d="M20.385 6.585a2.1 2.1 0 0 0-2.97-2.97L9 12v3h3l8.385-8.415zM16 5l3 3"/>
                                        </g>
                                    </svg>
                                </a>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>

        </div>

        <div class="mt-3 rounded-lg shadow-lg p-5">
            <span class=" font-semibold text-lg ">Sub Category List</span>
            <div class="relative overflow-x-auto shadow-md sm:rounded-lg mt-3">
                <table class="w-full text-sm text-left  text-gray-500 dark:text-gray-400">
                    <thead class="text-xs text-white  uppercase bg-blue-800 dark:bg-gray-700 dark:text-gray-400">
                        <tr>
                            <th scope="col" class="px-6 py-3">
                                Category Name
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Description
                            </th>

                            <th scope="col" class="px-6 float-right py-3">
                                
                                Action
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr
                            class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                            <th scope="row"
                                class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                Apple MacBook Pro 17"
                            </th>
                            <td class="px-6 py-4">
                                Silver
                            </td>

                            <td class="px-6 py-4 text-right">
                                <a href="#"
                                    class="font-medium float-right text-blue-600 dark:text-blue-500 hover:underline">
                                    <svg width="24" height="24" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                        <g fill="none" stroke="#3b82f6" stroke-linecap="round" stroke-linejoin="round" stroke-width="2">
                                            <path d="M7 7H6a2 2 0 0 0-2 2v9a2 2 0 0 0 2 2h9a2 2 0 0 0 2-2v-1"/>
                                            <path d="M20.385 6.585a2.1 2.1 0 0 0-2.97-2.97L9 12v3h3l8.385-8.415zM16 5l3 3"/>
                                        </g>
                                    </svg>
                                </a>
                            </td>
                        </tr>
                        <tr
                            class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                            <th scope="row"
                                class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                Microsoft Surface Pro
                            </th>
                            <td class="px-6 py-4">
                                White
                            </td>

                            <td class="px-6 py-4 text-right">
                                <a href="#"
                                    class="font-medium float-right text-blue-600 dark:text-blue-500 hover:underline">
                                    <svg width="24" height="24" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                        <g fill="none" stroke="#3b82f6" stroke-linecap="round" stroke-linejoin="round" stroke-width="2">
                                            <path d="M7 7H6a2 2 0 0 0-2 2v9a2 2 0 0 0 2 2h9a2 2 0 0 0 2-2v-1"/>
                                            <path d="M20.385 6.585a2.1 2.1 0 0 0-2.97-2.97L9 12v3h3l8.385-8.415zM16 5l3 3"/>
                                        </g>
                                    </svg>
                                </a>
                            </td>
                        </tr>
                        <tr class="bg-white dark:bg-gray-800 hover:bg-gray-50 dark:hover:bg-gray-600">
                            <th scope="row"
                                class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                Magic Mouse 2
                            </th>
                            <td class="px-6 py-4">
                                Black
                            </td>

                            <td class="px-6 py-4 text-right">
                                <a href="#"
                                    class="font-medium float-right text-blue-600 dark:text-blue-500 hover:underline">
                                    <svg width="24" height="24" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                        <g fill="none" stroke="#3b82f6" stroke-linecap="round" stroke-linejoin="round" stroke-width="2">
                                            <path d="M7 7H6a2 2 0 0 0-2 2v9a2 2 0 0 0 2 2h9a2 2 0 0 0 2-2v-1"/>
                                            <path d="M20.385 6.585a2.1 2.1 0 0 0-2.97-2.97L9 12v3h3l8.385-8.415zM16 5l3 3"/>
                                        </g>
                                    </svg>
                                </a>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>

        </div>
    </div>
@endsection
