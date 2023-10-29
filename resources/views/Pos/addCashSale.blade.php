<!doctype html>
<html>
@php
    $logo = session()->get('logo');
    $business_name = session()->get('business_name');
@endphp

<head>


    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    @vite('resources/css/app.css')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://kit.fontawesome.com/31104486ca.js" crossorigin="anonymous"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.8.1/flowbite.min.css" rel="stylesheet" />
    <title>Add Cash Sale</title>

</head>

<body>

    <link rel="icon" href="{{ $logo }}" sizes="16x16" type="image/png/jpeg">
    <!-- drawer component -->
    <aside id="drawer-navigation"
        class="fixed top-0 left-0 z-40 w-64 pr-4 pt-4 h-screen overflow-y-auto transition-transform -translate-x-full bg-white dark:bg-gray-800"
        tabindex="-1" aria-labelledby="drawer-navigation-label">
        <h5 id="drawer-navigation-label" class="text-base font-semibold text-gray-500 uppercase dark:text-gray-400">Menu
        </h5>
        <button type="button" data-drawer-hide="drawer-navigation" aria-controls="drawer-navigation"
            class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 absolute top-2.5 right-2.5 inline-flex items-center dark:hover:bg-gray-600 dark:hover:text-white">
            <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20"
                xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd"
                    d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                    clip-rule="evenodd"></path>
            </svg>
            <span class="sr-only">Close menu</span>
        </button>
        <div class=" overflow-y-auto">
            <ul class="space-y-2 font-medium">
                @php
                    $userRole = Session::get('userRole');
                @endphp
                @if ($userRole == 0)
                    <li>
                        <a href="/dashboard"
                            class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group">
                            <svg class="w-5 h-5 text-gray-500 transition duration-75 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white"
                                aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                                viewBox="0 0 22 21">
                                <path
                                    d="M16.975 11H10V4.025a1 1 0 0 0-1.066-.998 8.5 8.5 0 1 0 9.039 9.039.999.999 0 0 0-1-1.066h.002Z" />
                                <path
                                    d="M12.5 0c-.157 0-.311.01-.565.027A1 1 0 0 0 11 1.02V10h8.975a1 1 0 0 0 1-.935c.013-.188.028-.374.028-.565A8.51 8.51 0 0 0 12.5 0Z" />
                            </svg>
                            <span class="ml-3">Dashboard</span>
                        </a>
                    </li>
                @endif

                <li>
                    <button type="button"
                        class="flex items-center w-full p-2 text-base text-gray-900 transition duration-75 rounded-lg group hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700"
                        aria-controls="dropdown-example" data-collapse-toggle="dropdown-example">
                        <svg width="24" height="24" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path fill="#6b7280"
                                d="M11 11V2H2v9m2-2V4h5v5m11-2.5C20 7.9 18.9 9 17.5 9S15 7.9 15 6.5S16.11 4 17.5 4S20 5.11 20 6.5M6.5 14L2 22h9m-3.42-2H5.42l1.08-1.92M22 6.5C22 4 20 2 17.5 2S13 4 13 6.5s2 4.5 4.5 4.5S22 9 22 6.5M19 17v-3h-2v3h-3v2h3v3h2v-3h3v-2Z" />
                        </svg>
                        <span class="flex-1 ml-3 text-left whitespace-nowrap">Category</span>
                        <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                            viewBox="0 0 10 6">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="m1 1 4 4 4-4" />
                        </svg>
                    </button>
                    <ul id="dropdown-example" class="hidden py-2 space-y-2">
                        <li>
                            <a href="/category/create"
                                class="flex items-center w-full p-2 text-gray-900 transition duration-75 rounded-lg pl-11 group hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700">Add
                                Category</a>
                        </li>
                        <li>
                            <a href="/category"
                                class="flex items-center w-full p-2 text-gray-900 transition duration-75 rounded-lg pl-11 group hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700">Category
                                List</a>
                        </li>

                    </ul>
                </li>

                <li>
                    <button type="button"
                        class="flex items-center w-full p-2 text-base text-gray-900 transition duration-75 rounded-lg group hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700"
                        aria-controls="customer" data-collapse-toggle="customer">
                        <svg width="24" height="24" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <g fill="none" stroke="currentColor">
                                <path stroke-linejoin="round"
                                    d="M4 18a4 4 0 0 1 4-4h8a4 4 0 0 1 4 4a2 2 0 0 1-2 2H6a2 2 0 0 1-2-2Z" />
                                <circle cx="12" cy="7" r="3" />
                            </g>
                        </svg>
                        <span class="flex-1 ml-3 text-left whitespace-nowrap">Customer</span>
                        <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                            viewBox="0 0 10 6">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="m1 1 4 4 4-4" />
                        </svg>
                    </button>
                    <ul id="customer" class="hidden py-2 space-y-2">
                        <li>
                            <a href="/customer/create"
                                class="flex items-center w-full p-2 text-gray-900 transition duration-75 rounded-lg pl-11 group hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700">Add
                                Customer</a>
                        </li>
                        <li>
                            <a href="/customer"
                                class="flex items-center w-full p-2 text-gray-900 transition duration-75 rounded-lg pl-11 group hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700">Customer
                                List</a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="/serial"
                        class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group">
                        <svg width="24" height="24" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path fill="none" stroke="#6b7280" stroke-linecap="round" stroke-linejoin="round"
                                stroke-width="2" d="M4 17V7l7 10V7m4 10h5m-5-7a2.5 3 0 1 0 5 0a2.5 3 0 1 0-5 0" />
                        </svg>
                        <span class="ml-3">Serial</span>
                    </a>
                </li>
                <li>
                    <button type="button"
                        class="flex items-center w-full p-2 text-base text-gray-900 transition duration-75 rounded-lg group hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700"
                        aria-controls="wpurchase" data-collapse-toggle="wpurchase">
                        <svg width="24" height="24" viewBox="0 0 48 48" xmlns="http://www.w3.org/2000/svg">
                            <path fill="none" stroke="#000000" stroke-linecap="round" stroke-linejoin="round"
                                d="M8.038 16.341h31.925a3.537 3.537 0 0 1 3.537 3.537v18.986a3.538 3.538 0 0 1-3.538 3.538H8.037A3.537 3.537 0 0 1 4.5 38.865V19.88a3.538 3.538 0 0 1 3.538-3.538Z" />
                            <rect width="4.126" height="4.127" x="19.874" y="19.353" fill="none"
                                stroke="#000000" stroke-linecap="round" stroke-linejoin="round" rx="2.063" />
                            <path fill="none" stroke="#000000" stroke-linecap="round" stroke-linejoin="round"
                                d="M35.367 19.353h0a2.063 2.063 0 0 1 2.063 2.063h0a2.063 2.063 0 0 1-2.063 2.064h0a2.063 2.063 0 0 1-2.063-2.064h0a2.063 2.063 0 0 1 2.063-2.063Zm-13.473-7.141a6.612 6.612 0 1 1 13.224 0m-13.224 0v4.15m13.224-4.15v3.913m-22.487-3.331a6.612 6.612 0 0 1 10.432-5.4m-10.432 5.4v3.262M8.13 21.842a2.063 2.063 0 1 1 4.126 0m-.001 14.897a2.063 2.063 0 1 1-4.126 0m4.126 0V21.84m-4.125.002V36.74" />
                        </svg>
                        <span class="flex-1 ml-3 text-left whitespace-nowrap">Warehouse Purchase</span>
                        <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                            viewBox="0 0 10 6">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                stroke-width="2" d="m1 1 4 4 4-4" />
                        </svg>
                    </button>
                    <ul id="wpurchase" class="hidden py-2 space-y-2">
                        <li>
                            <a href="/warehousepurchase/create"
                                class="flex items-center w-full p-2 text-gray-900 transition duration-75 rounded-lg pl-11 group hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700">
                               Add Purchase
                            </a>
                        </li>
                        <li>
                            <a href="/warehousepurchase"
                                class="flex items-center w-full p-2 text-gray-900 transition duration-75 rounded-lg pl-11 group hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700">Warehouse Purchase List
                             
                            </a>
                        </li>
                    </ul>
                </li>
                <li>
                    <button type="button"
                        class="flex items-center w-full p-2 text-base text-gray-900 transition duration-75 rounded-lg group hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700"
                        aria-controls="warehouse" data-collapse-toggle="warehouse">
                        <svg width="24" height="24" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <g fill="none" stroke="#949494" stroke-linecap="round" stroke-linejoin="round"
                                stroke-width="2">
                                <path d="M3 21V8l9-4l9 4v13" />
                                <path d="M13 13h4v8H7v-6h6" />
                                <path d="M13 21v-9a1 1 0 0 0-1-1h-2a1 1 0 0 0-1 1v3" />
                            </g>
                        </svg>
                        <span class="flex-1 ml-3 text-left whitespace-nowrap">Warehouse</span>
                        <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                            viewBox="0 0 10 6">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                stroke-width="2" d="m1 1 4 4 4-4" />
                        </svg>
                    </button>
                    <ul id="warehouse" class="hidden py-2 space-y-2">
                        <li>
                            <a href="/warehouse/create"
                                class="flex items-center w-full p-2 text-gray-900 transition duration-75 rounded-lg pl-11 group hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700">Add
                                Product</a>
                        </li>
                        <li>
                            <a href="/warehouse"
                                class="flex items-center w-full p-2 text-gray-900 transition duration-75 rounded-lg pl-11 group hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700">
                                Product List</a>
                        </li>
                        <li>
                            <a href="/warehouseadjustment"
                                class="flex items-center w-full p-2 text-gray-900 transition duration-75 rounded-lg pl-11 group hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700">Pending
                                Product</a>
                        </li>
                        <li>
                            <a href="/warehouseadjustment/create"
                                class="flex items-center w-full p-2 text-gray-900 transition duration-75 rounded-lg pl-11 group hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700">Stock
                                Usage and Damage
                            </a>
                        </li>
                        <li>
                            <a href="/damageproduct"
                                class="flex items-center w-full p-2 text-gray-900 transition duration-75 rounded-lg pl-11 group hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700">
                                Usage and Damage List
                            </a>
                        </li>
                    </ul>
                </li>
                <li>
                    <button type="button"
                        class="flex items-center w-full p-2 text-base text-gray-900 transition duration-75 rounded-lg group hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700"
                        aria-controls="purchase" data-collapse-toggle="purchase">
                        <svg width="24" height="24" viewBox="0 0 48 48" xmlns="http://www.w3.org/2000/svg">
                            <path fill="none" stroke="#000000" stroke-linecap="round" stroke-linejoin="round"
                                d="M8.038 16.341h31.925a3.537 3.537 0 0 1 3.537 3.537v18.986a3.538 3.538 0 0 1-3.538 3.538H8.037A3.537 3.537 0 0 1 4.5 38.865V19.88a3.538 3.538 0 0 1 3.538-3.538Z" />
                            <rect width="4.126" height="4.127" x="19.874" y="19.353" fill="none"
                                stroke="#000000" stroke-linecap="round" stroke-linejoin="round" rx="2.063" />
                            <path fill="none" stroke="#000000" stroke-linecap="round" stroke-linejoin="round"
                                d="M35.367 19.353h0a2.063 2.063 0 0 1 2.063 2.063h0a2.063 2.063 0 0 1-2.063 2.064h0a2.063 2.063 0 0 1-2.063-2.064h0a2.063 2.063 0 0 1 2.063-2.063Zm-13.473-7.141a6.612 6.612 0 1 1 13.224 0m-13.224 0v4.15m13.224-4.15v3.913m-22.487-3.331a6.612 6.612 0 0 1 10.432-5.4m-10.432 5.4v3.262M8.13 21.842a2.063 2.063 0 1 1 4.126 0m-.001 14.897a2.063 2.063 0 1 1-4.126 0m4.126 0V21.84m-4.125.002V36.74" />
                        </svg>
                        <span class="flex-1 ml-3 text-left whitespace-nowrap">Showroom Purchase</span>
                        <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                            viewBox="0 0 10 6">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                stroke-width="2" d="m1 1 4 4 4-4" />
                        </svg>
                    </button>
                    <ul id="purchase" class="hidden py-2 space-y-2">
                        <li>
                            <a href="/purchase/create"
                                class="flex items-center w-full p-2 text-gray-900 transition duration-75 rounded-lg pl-11 group hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700">Add
                                Purchase
                            </a>
                        </li>
                        <li>
                            <a href="/purchase"
                                class="flex items-center w-full p-2 text-gray-900 transition duration-75 rounded-lg pl-11 group hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700">Purchase
                                List
                            </a>
                        </li>
                    </ul>
                </li>
                <li>
                    <button type="button"
                        class="flex items-center w-full p-2 text-base text-gray-900 transition duration-75 rounded-lg group hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700"
                        aria-controls="product" data-collapse-toggle="product">
                        <svg width="24" height="24" viewBox="0 0 2048 2048"
                            xmlns="http://www.w3.org/2000/svg">
                            <path fill="#6b7280"
                                d="m1344 2l704 352v785l-128-64V497l-512 256v258l-128 64V753L768 497v227l-128-64V354L1344 2zm0 640l177-89l-463-265l-211 106l497 248zm315-157l182-91l-497-249l-149 75l464 265zm-507 654l-128 64v-1l-384 192v455l384-193v144l-448 224L0 1735v-676l576-288l576 288v80zm-640 710v-455l-384-192v454l384 193zm64-566l369-184l-369-185l-369 185l369 184zm576-1l448-224l448 224v527l-448 224l-448-224v-527zm384 576v-305l-256-128v305l256 128zm384-128v-305l-256 128v305l256-128zm-320-288l241-121l-241-120l-241 120l241 121z" />
                        </svg>
                        <span class="flex-1 ml-3 text-left whitespace-nowrap">Showroom Products</span>
                        <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                            viewBox="0 0 10 6">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                stroke-width="2" d="m1 1 4 4 4-4" />
                        </svg>
                    </button>
                    <ul id="product" class="hidden py-2 space-y-2">
                        <li>
                            <a href="/product/create"
                                class="flex items-center w-full p-2 text-gray-900 transition duration-75 rounded-lg pl-11 group hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700">Add
                                Showroom Products</a>
                        </li>
                        <li>
                            <a href="/stockadjustment"
                                class="flex items-center w-full p-2 text-gray-900 transition duration-75 rounded-lg pl-11 group hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700">Pending
                                Product</a>
                        </li>
                        <li>
                            <a href="/product"
                                class="flex items-center w-full p-2 text-gray-900 transition duration-75 rounded-lg pl-11 group hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700">Stock
                                List</a>
                        </li>
                        <li>
                            <a href="/stockadjustment/create"
                                class="flex items-center w-full p-2 text-gray-900 transition duration-75 rounded-lg pl-11 group hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700">Stock
                                add or substract
                            </a>
                        </li>
                    </ul>
                </li>
                <li>
                    <button type="button"
                        class="flex items-center w-full p-2 text-base text-gray-900 transition duration-75 rounded-lg group hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700"
                        aria-controls="sale" data-collapse-toggle="sale">
                        <svg width="24" height="24" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path fill="#6b7280"
                                d="M7 18c1.1 0 2 .9 2 2s-.9 2-2 2s-2-.9-2-2s.9-2 2-2m10 0c1.1 0 2 .9 2 2s-.9 2-2 2s-2-.9-2-2s.9-2 2-2m-9.8-3.2c0 .1.1.2.2.2H19v2H7c-1.1 0-2-.9-2-2c0-.4.1-.7.2-1l1.3-2.4L3 4H1V2h3.3l4.3 9h7l3.9-7l1.7 1l-3.9 7c-.3.6-1 1-1.7 1H8.1l-.9 1.6v.2M9.4 1c.8 0 1.4.6 1.4 1.4s-.6 1.4-1.4 1.4S8 3.2 8 2.4S8.7 1 9.4 1m5.2 8c-.8 0-1.4-.6-1.4-1.4s.6-1.4 1.4-1.4s1.4.6 1.4 1.4S15.3 9 14.6 9M9.2 9L8 7.8L14.8 1L16 2.2L9.2 9" />
                        </svg>
                        <span class="flex-1 ml-3 text-left whitespace-nowrap">Sale</span>
                        <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                            viewBox="0 0 10 6">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                stroke-width="2" d="m1 1 4 4 4-4" />
                        </svg>
                    </button>
                    <ul id="sale" class="hidden py-2 space-y-2">
                        <li>
                            <a href="/cashsale/create"
                                class="flex items-center w-full p-2 text-gray-900 transition duration-75 rounded-lg pl-11 group hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700">Cash
                                Sale</a>
                        </li>
                        <li>
                            <a href="/depositsale/create"
                                class="flex items-center w-full p-2 text-gray-900 transition duration-75 rounded-lg pl-11 group hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700">Deposit
                                Sale</a>
                        </li>
                        <li>
                            <a href="/preordersale/create"
                                class="flex items-center w-full p-2 text-gray-900 transition duration-75 rounded-lg pl-11 group hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700">Preorder
                                Sale</a>
                        </li>
                        <li>
                            <a href="/cashsale"
                                class="flex items-center w-full p-2 text-gray-900 transition duration-75 rounded-lg pl-11 group hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700">Cash
                                Sale List</a>
                        </li>
                        <li>
                            <a href="/depositsale"
                                class="flex items-center w-full p-2 text-gray-900 transition duration-75 rounded-lg pl-11 group hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700">Deposit
                                Sale List</a>
                        </li>
                        <li>
                            <a href="/preordersale"
                                class="flex items-center w-full p-2 text-gray-900 transition duration-75 rounded-lg pl-11 group hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700">Preorder
                                Sale List</a>
                        </li>
                    </ul>
                </li>
                <li>
                    <button type="button"
                        class="flex items-center w-full p-2 text-base text-gray-900 transition duration-75 rounded-lg group hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700"
                        aria-controls="saleReturn" data-collapse-toggle="saleReturn">
                        <svg width="24" height="24" viewBox="0 0 48 48" xmlns="http://www.w3.org/2000/svg">
                            <g fill="none" stroke="#6b7280" stroke-linecap="round" stroke-linejoin="round"
                                stroke-width="4">
                                <path d="m13 8l-7 6l7 7" />
                                <path
                                    d="M6 14h22.994c6.883 0 12.728 5.62 12.996 12.5c.284 7.27-5.723 13.5-12.996 13.5H11.998" />
                            </g>
                        </svg>
                        <span class="flex-1 ml-3 text-left whitespace-nowrap">Sale Return</span>
                        <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                            viewBox="0 0 10 6">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                stroke-width="2" d="m1 1 4 4 4-4" />
                        </svg>
                    </button>
                    <ul id="saleReturn" class="hidden py-2 space-y-2">
                        <li>
                            <a href="/salereturn/create"
                                class="flex items-center w-full p-2 text-gray-900 transition duration-75 rounded-lg pl-11 group hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700">Sale
                                Return</a>
                        </li>
                        <li>
                            <a href="/salereturn"
                                class="flex items-center w-full p-2 text-gray-900 transition duration-75 rounded-lg pl-11 group hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700">Sale
                                Return List</a>
                        </li>
                    </ul>
                </li>
                <li>
                    <button type="button"
                        class="flex items-center w-full p-2 text-base text-gray-900 transition duration-75 rounded-lg group hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700"
                        aria-controls="stocktakeout" data-collapse-toggle="stocktakeout">
                        <svg width="24" height="24" viewBox="0 0 48 48" xmlns="http://www.w3.org/2000/svg">
                            <g fill="#6b7280">
                                <path d="M27.707 7.707a1 1 0 0 0-1.414-1.414L24 8.586l-2.293-2.293a1 1 0 1 0-1.414 1.414L22.586 10l-2.293 2.293a1 1 0 0 0 1.414 1.414L24 11.414l2.293 2.293a1 1 0 1 0 1.414-1.415L25.414 10l2.293-2.293Zm6.242 24.477a1 1 0 0 1-.633 1.265l-4.5 1.5a1 1 0 0 1-.632-1.898l4.5-1.5a1 1 0 0 1 1.265.633Z"/>
                                <path fill-rule="evenodd" d="M6.684 26.449L10 27.554V36a1 1 0 0 0 .673.945l12.992 4.497a.99.99 0 0 0 .637.011l.014-.004l.015-.005l12.996-4.499A1 1 0 0 0 38 36v-8.446l3.316-1.105a1 1 0 0 0 .465-1.574l-4-5a1 1 0 0 0-.456-.32l-12.998-4.5a1 1 0 0 0-.654 0l-12.998 4.5a.999.999 0 0 0-.456.32l-4 5a1 1 0 0 0 .465 1.574Zm14.635 4.124l1.681-2.4v10.923l-11-3.808V28.22l8.184 2.728a1 1 0 0 0 1.135-.376ZM14.057 20.5L24 23.942l9.943-3.442L24 17.058L14.057 20.5Zm12.624 10.073L25 28.174v10.923l11-3.808V28.22l-8.184 2.728a1 1 0 0 1-1.135-.376ZM11.34 21.676l-2.663 3.329l5.511 1.837l5.92 1.973l2.313-3.303l-.135-.047l-10.946-3.79Zm27.983 3.329l-2.663-3.33l-11.081 3.837l2.313 3.303l11.431-3.81Z" clip-rule="evenodd"/>
                            </g>
                        </svg>
                        <span class="flex-1 ml-3 text-left whitespace-nowrap">Stock Takeout</span>
                        <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                            viewBox="0 0 10 6">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                stroke-width="2" d="m1 1 4 4 4-4" />
                        </svg>
                    </button>
                    <ul id="stocktakeout" class="hidden py-2 space-y-2">
                        <li>
                            <a href="/stocktakeout/create"
                                class="flex items-center w-full p-2 text-gray-900 transition duration-75 rounded-lg pl-11 group hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700">Stock Takeout</a>
                        </li>
                        <li>
                            <a href="/stocktakeout"
                                class="flex items-center w-full p-2 text-gray-900 transition duration-75 rounded-lg pl-11 group hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700">Stock Takeout List</a>
                        </li>
                    </ul>
                </li>
                <li>
                    <button type="button"
                        class="flex items-center w-full p-2 text-base text-gray-900 transition duration-75 rounded-lg group hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700"
                        aria-controls="expense" data-collapse-toggle="expense">
                        <svg width="24" height="24" viewBox="0 0 48 48" xmlns="http://www.w3.org/2000/svg">
                            <g fill="none" stroke="#000000" stroke-linecap="round" stroke-linejoin="round">
                                <path
                                    d="m16.517 14.344l7.705-4.8l10.274 8.688v12.566l-5.967 4.836V23.816l-12.012-9.472Zm9.541-5.086L31.9 5.646l10.46 7.293l-6.433 4.926m.277 10.748l6.296-5.14m-6.296 2.479l6.296-5.14m-6.296 2.48l6.296-5.14m-6.296 2.48l6.296-5.14" />
                                <path
                                    d="m35.314 14.172l2.723-2.077l-1.865-1.247l-1.498 1.131M5.5 31.954l13.543 10.4l7.423-5.91" />
                                <path d="m5.5 29.285l13.543 10.4l7.423-5.91" />
                                <path d="m5.604 26.616l13.543 10.401l7.423-5.91" />
                                <path
                                    d="m5.59 23.948l13.542 10.4l7.423-5.91m-6.32-4.688c-.226 1.027-1.694 1.554-3.278 1.175h0c-1.584-.378-2.685-1.517-2.459-2.545c.226-1.027 1.694-1.553 3.278-1.175s2.685 1.518 2.459 2.545Z" />
                                <path d="m15.051 15.826l-9.295 5.595l13.331 10.117l7.64-6.015" />
                            </g>
                        </svg>
                        <span class="flex-1 ml-3 text-left whitespace-nowrap">Expense and Income</span>
                        <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                            viewBox="0 0 10 6">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                stroke-width="2" d="m1 1 4 4 4-4" />
                        </svg>
                    </button>
                    <ul id="expense" class="hidden py-2 space-y-2">
                        <li>
                            <a href="/expenseCategory/create"
                                class="flex items-center w-full p-2 text-gray-900 transition duration-75 rounded-lg pl-11 group hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700">Category</a>
                        </li>
                        <li>
                            <a href="/expense/create"
                                class="flex items-center w-full p-2 text-gray-900 transition duration-75 rounded-lg pl-11 group hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700">Add
                                Expense and Income</a>
                        </li>
                        <li>
                            <a href="/expense"
                                class="flex items-center w-full p-2 text-gray-900 transition duration-75 rounded-lg pl-11 group hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700">
                                Expense and Income List</a>
                        </li>
                    </ul>
                </li>
                @if ($userRole == 0)
                <li>
                    <a href="/cashthb/create"
                        class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group">
                        <svg width="24" height="24" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path fill="#6b7280" d="M16.1 11.6c.6-.7.9-1.6.9-2.6c0-1.9-1.3-3.4-3-3.9L13 5V3h-2v2H7v14h4v2h2v-2h1c2.2 0 4-1.8 4-4c0-1.5-.8-2.7-1.9-3.4M15 9c0 1.1-.9 2-2 2V7c1.1 0 2 .9 2 2M9 7h2v4H9V7m0 10v-4h2v4H9m5 0h-1v-4h1c1.1 0 2 .9 2 2s-.9 2-2 2Z"/>
                        </svg>
                        <span class="ml-3">THB Addjustment</span>
                    </a>
                </li>
            @endif
                @if ($userRole == 0)
                    <li>
                        <a href="/account"
                            class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group">
                            <svg width="24" height="24" viewBox="0 0 14 14"
                                xmlns="http://www.w3.org/2000/svg">
                                <g fill="none" stroke="#6b7280" stroke-linecap="round" stroke-linejoin="round">
                                    <path
                                        d="M7 4.5V3M5.5 8.5c0 .75.67 1 1.5 1s1.5 0 1.5-1c0-1.5-3-1.5-3-3c0-1 .67-1 1.5-1s1.5.38 1.5 1M7 9.5V11" />
                                    <circle cx="7" cy="7" r="6.5" />
                                </g>
                            </svg>
                            <span class="ml-3">Accounting</span>
                        </a>
                    </li>
                @endif
                @if ($userRole == 0)
                    <li>
                        <button type="button"
                            class="flex items-center w-full p-2 text-base text-gray-900 transition duration-75 rounded-lg group hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700"
                            aria-controls="expense" data-collapse-toggle="admin">
                            <svg width="24" height="24" viewBox="0 0 36 36"
                                xmlns="http://www.w3.org/2000/svg">
                                <path fill="#6b7280"
                                    d="M14.68 14.81a6.76 6.76 0 1 1 6.76-6.75a6.77 6.77 0 0 1-6.76 6.75Zm0-11.51a4.76 4.76 0 1 0 4.76 4.76a4.76 4.76 0 0 0-4.76-4.76Z"
                                    class="clr-i-outline clr-i-outline-path-1" />
                                <path fill="#6b7280"
                                    d="M16.42 31.68A2.14 2.14 0 0 1 15.8 30H4v-5.78a14.81 14.81 0 0 1 11.09-4.68h.72a2.2 2.2 0 0 1 .62-1.85l.12-.11c-.47 0-1-.06-1.46-.06A16.47 16.47 0 0 0 2.2 23.26a1 1 0 0 0-.2.6V30a2 2 0 0 0 2 2h12.7Z"
                                    class="clr-i-outline clr-i-outline-path-2" />
                                <path fill="#6b7280" d="M26.87 16.29a.37.37 0 0 1 .15 0a.42.42 0 0 0-.15 0Z"
                                    class="clr-i-outline clr-i-outline-path-3" />
                                <path fill="#6b7280"
                                    d="m33.68 23.32l-2-.61a7.21 7.21 0 0 0-.58-1.41l1-1.86A.38.38 0 0 0 32 19l-1.45-1.45a.36.36 0 0 0-.44-.07l-1.84 1a7.15 7.15 0 0 0-1.43-.61l-.61-2a.36.36 0 0 0-.36-.24h-2.05a.36.36 0 0 0-.35.26l-.61 2a7 7 0 0 0-1.44.6l-1.82-1a.35.35 0 0 0-.43.07L17.69 19a.38.38 0 0 0-.06.44l1 1.82a6.77 6.77 0 0 0-.63 1.43l-2 .6a.36.36 0 0 0-.26.35v2.05A.35.35 0 0 0 16 26l2 .61a7 7 0 0 0 .6 1.41l-1 1.91a.36.36 0 0 0 .06.43l1.45 1.45a.38.38 0 0 0 .44.07l1.87-1a7.09 7.09 0 0 0 1.4.57l.6 2a.38.38 0 0 0 .35.26h2.05a.37.37 0 0 0 .35-.26l.61-2.05a6.92 6.92 0 0 0 1.38-.57l1.89 1a.36.36 0 0 0 .43-.07L32 30.4a.35.35 0 0 0 0-.4l-1-1.88a7 7 0 0 0 .58-1.39l2-.61a.36.36 0 0 0 .26-.35v-2.1a.36.36 0 0 0-.16-.35ZM24.85 28a3.34 3.34 0 1 1 3.33-3.33A3.34 3.34 0 0 1 24.85 28Z"
                                    class="clr-i-outline clr-i-outline-path-4" />
                                <path fill="none" d="M0 0h36v36H0z" />
                            </svg>
                            <span class="flex-1 ml-3 text-left whitespace-nowrap">Admin</span>
                            <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                fill="none" viewBox="0 0 10 6">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="2" d="m1 1 4 4 4-4" />
                            </svg>
                        </button>
                        <ul id="admin" class="hidden py-2 space-y-2">
                            <li>
                                <a href="/logoandname"
                                    class="flex items-center w-full p-2 text-gray-900 transition duration-75 rounded-lg pl-11 group hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700">Update
                                    Logo and Name</a>
                            </li>
                            <li>
                                <a href="/profileandpassword"
                                    class="flex items-center w-full p-2 text-gray-900 transition duration-75 rounded-lg pl-11 group hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700">Update
                                    Profile</a>
                            </li>
                            <li>
                                <a href="/user"
                                    class="flex items-center w-full p-2 text-gray-900 transition duration-75 rounded-lg pl-11 group hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700">User
                                    List</a>
                            </li>

                        </ul>
                    </li>
                @endif

                <li>
                    <button type="button"
                        class="flex items-center w-full p-2 text-base text-gray-900 transition duration-75 rounded-lg group hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700"
                        aria-controls="user" data-collapse-toggle="user">
                        <svg width="24" height="24" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path fill="none" stroke="#6b7280" stroke-linecap="round" stroke-linejoin="round"
                                stroke-width="1.5"
                                d="M18 18.72a9.094 9.094 0 0 0 3.741-.479a3 3 0 0 0-4.682-2.72m.94 3.198l.001.031c0 .225-.012.447-.037.666A11.944 11.944 0 0 1 12 21c-2.17 0-4.207-.576-5.963-1.584A6.062 6.062 0 0 1 6 18.719m12 0a5.971 5.971 0 0 0-.941-3.197m0 0A5.995 5.995 0 0 0 12 12.75a5.995 5.995 0 0 0-5.058 2.772m0 0a3 3 0 0 0-4.681 2.72a8.986 8.986 0 0 0 3.74.477m.94-3.197a5.971 5.971 0 0 0-.94 3.197M15 6.75a3 3 0 1 1-6 0a3 3 0 0 1 6 0Zm6 3a2.25 2.25 0 1 1-4.5 0a2.25 2.25 0 0 1 4.5 0Zm-13.5 0a2.25 2.25 0 1 1-4.5 0a2.25 2.25 0 0 1 4.5 0Z" />
                        </svg>
                        <span class="flex-1 ml-3 text-left whitespace-nowrap">User panel</span>
                        <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                            viewBox="0 0 10 6">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                stroke-width="2" d="m1 1 4 4 4-4" />
                        </svg>
                    </button>
                    <ul id="user" class="hidden py-2 space-y-2">
                        <li>
                            <a href="#"
                                class="flex items-center w-full p-2 text-gray-900 transition duration-75 rounded-lg pl-11 group hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700"></a>
                        </li>
                        <li>
                            <a href="#"
                                class="flex items-center w-full p-2 text-gray-900 transition duration-75 rounded-lg pl-11 group hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700">
                            </a>
                        </li>

                    </ul>
                </li>
                <li>
                    <a href="/signout"
                        class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group">
                        <svg width="24" height="24" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path fill="#6b7280"
                                d="m17 8l-1.4 1.4l1.6 1.6H9v2h8.2l-1.6 1.6L17 16l4-4l-4-4M5 5h7V3H5c-1.1 0-2 .9-2 2v14c0 1.1.9 2 2 2h7v-2H5V5Z" />
                        </svg>
                        <span class="ml-3">Logout</span>
                    </a>
                </li>
            </ul>
        </div>
    </aside>

    <nav
        class=" bg-blue-700 p-3  dark:bg-gray-900 fixed w-full z-20 top-0 left-0 border-b border-gray-200 dark:border-gray-600">
        <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto">

            <div class="text-center">
                <button
                    class="text-white bg-green-500 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800"
                    type="button" data-drawer-target="drawer-navigation" data-drawer-show="drawer-navigation"
                    aria-controls="drawer-navigation">
                    Show navigation
                </button>
            </div>
            <div class="flex md:order-2">
                <a href="/purchase/create">
                    <button type="button"
                        class="text-white bg-yellow-400 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-4 py-0 text-center md:mr-0 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                        <div class="flex justify-center items-center align-middle pt-3">
                            <p class="mx-1"> <svg width="24" height="24" viewBox="0 0 24 24"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path fill="#ffffff"
                                        d="M11 11V3H5c-1.1 0-2 .9-2 2v6h8zm2 0h8V5c0-1.1-.9-2-2-2h-6v8zm-2 2H3v6c0 1.1.9 2 2 2h6v-8zm2 0v8h6c1.1 0 2-.9 2-2v-6h-8z" />
                                </svg></p>
                            <p>POS-Purchase</p>
                        </div>
                    </button></a>
                <a href="/cashsale/create">
                    <button type="button"
                        class="text-white ml-2 bg-green-500 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-2 py-0 text-center md:mr-0 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                        <div class="flex justify-center items-center pt-3">
                            <p class="mx-1"> <svg width="24" height="24" viewBox="0 0 24 24"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path fill="#ffffff"
                                        d="M11 11V3H5c-1.1 0-2 .9-2 2v6h8zm2 0h8V5c0-1.1-.9-2-2-2h-6v8zm-2 2H3v6c0 1.1.9 2 2 2h6v-8zm2 0v8h6c1.1 0 2-.9 2-2v-6h-8z" />
                                </svg></p>
                            <p>POS-Sale</p>
                        </div>
                    </button>
                </a>
                <button data-collapse-toggle="navbar-sticky" type="button"
                    class="inline-flex items-center p-2 w-10 h-10 justify-center text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600"
                    aria-controls="navbar-sticky" aria-expanded="false">
                    <span class="sr-only">Open main menu</span>
                    <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                        viewBox="0 0 17 14">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M1 1h15M1 7h15M1 13h15" />
                    </svg>
                </button>
            </div>
            <div class="items-center justify-between hidden w-full md:flex md:w-auto md:order-1" id="navbar-sticky">
                <a href="/dashboard" class="flex items-center">
                    <img src="{{ $logo }}" class="h-10 mr-3" alt="SKS Logo">
                    <span
                        class="self-center text-2xl font-semibold whitespace-nowrap text-white dark:text-white">{{ $business_name }}</span>
                </a>
            </div>
        </div>
    </nav>
    <div class=" mt-24">

        <div class=" flex justify-between p-3">
            <p class=" text-2xl">Add CashSale</p>
            <a href="/customer/create"> <button class="px-3 py-2 bg-blue-600 rounded-lg text-white">+ Add
                    Customer</button></a>
        </div>
        <form action="/cashsale" method="post">
            @csrf
            <div class="mt-3 rounded-lg shadow-lg p-5">
                <div class="row">
                    <div class="col-xs-6 col-sm-6 col-md-6 ">
                        <span id="day"></span> : <span id="year"></span>
                    </div>
                    <div class="col-xs-6 col-sm-6 col-md-6 text-right">
                        <span>Invoice No: {{ $lastId + 1 }}</span>
                    </div>
                </div>
                <div class="flex w-full justify-around items-center space-x-3 py-5">
                    <div class="mb-6 w-full">
                        <label for="customer"
                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Customer Name
                        </label>

                        <select name="customer" class=" w-64 h-10" id="customerList"></select>

                    </div>
                </div>
                <div class="flex space-x-3  w-8/12 justify-items-center items-center">
                    <div class="mb-6 w-full">
                        <label for="product"
                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Product
                            Name</label>
                        <select id="productselect"
                            class="bg-gray-50 border w-full border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                            <option value="">-- choose product --</option>
                            @foreach ($products as $product)
                                <option value="{{ $product->id }}">
                                    {{ $product->product_name }}
                                </option>
                            @endforeach
                        </select>
                    </div>
                    <div class="mb-6 w-full ">
                        <label for="purchasedate"
                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Puchase
                            Quantity
                        </label>
                        <input type="number" min="0" value="1" name="purchasedate" id="itemQuantity"
                            class="bg-gray-50 border w-full border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block  p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                            placeholder="Category Name" required>
                    </div>
                    <button type="button" id="add"
                        class=" bg-yellow-400 text-white rounded-lg font-medium px-2 w-60 py-2 get-details">Add to
                        list</button>
                </div>
                <div class="card-body">
                    <table id="products_table"
                        class="w-full text-sm text-left text-gray-500 rounded-lg dark:text-gray-400">
                        <thead class="text-xs text-white uppercase bg-blue-400  dark:bg-gray-700 dark:text-gray-400">
                            <tr>
                                <th scope="col" class="px-6 py-3 rounded-l-lg">Product</th>
                                <th scope="col" class="px-6 py-3">Price</th>
                                <th scope="col" class="px-6 py-3">Quantity</th>
                                <th scope="col" class="px-6 py-3">Serial No</th>
                                <th scope="col" class="px-6 float-right py-3">Amount</th>
                                <th scope="col" class="px-6 py-3 rounded-r-lg"></th>
                            </tr>
                        </thead>
                        <tbody id="new">

                        </tbody>
                    </table>
                    <div class="flex justify-end">
                        <button id="delBut" type="button" class=" bg-red-500 px-2 py-1 rounded-md my-5">Delete
                            Row</button>
                    </div>

                    <div class=" flex items-center justify-end  ">
                        <span class=" font-semibold text-lg">Discount(Ks) : </span>
                        <input type="number" class="rounded-lg font-semibold text-lg w-28 border-transparent"
                            name="discount" value="0" id="discount">
                    </div>
                    <div class=" flex items-center justify-end  ">
                        <span class=" font-semibold text-lg">Grand Total(Ks) : </span>
                        <input type="number" readonly
                            class="rounded-lg font-semibold text-lg w-28 border-transparent" name="grandtotal"
                            id="gtotal">
                    </div>
                    <div class=" mb-5 flex flex-col">
                        <label for="description">Remarks</label>
                        <textarea name="remark" id="" cols="100" rows="2"></textarea>
                    </div>
                    <span class="mt-5 ml-[73%]">
                        <button type="submit"
                            class=" bg-yellow-400  text-white rounded-lg font-medium px-5 py-2">Submit</button>
                        <button type="button" class=" bg-gray-400 rounded-lg font-medium px-5 py-2">Cancel</button>
                    </span>
                </div>
                <input type="hidden" id="credit">
                <input type="hidden" id="deposit">
        </form>
        @if (session('fail'))
            <script>
                let msg = @json(session('fail'));
                swal("Oops!", msg, "error");
            </script>
        @endif

        <!-- Include Select2 (full version) -->

        <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.8.1/flowbite.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.1/jquery.min.js"
            integrity="sha512-aVKKRRi/Q/YV+4mjoKBsE4x3H+BkegoM/em46NNlCqNTmUYADjBbeNefNxYV7giUp0VxICtqdrbqU7iVaeZNXA=="
            crossorigin="anonymous" referrerpolicy="no-referrer"></script>

        <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous">
        </script>


        <script src="{{ asset('js/output.js') }}" defer></script>

        <script>
            $(document).ready(function() {
                $("#customerList").select2({
                    placeholder: 'Choose Customer',
                    ajax: {
                        url: "{{ route('selectproducts') }}",
                        processResults: function({
                            data
                        }) {
                            return {
                                results: $.map(data, function(item) {
                                    return {
                                        id: item.id,
                                        text: item.cus_name,
                                    }
                                })
                            }
                        }
                    }
                })

                $("#productselect").select2({
                    placeholder: 'Choose Products',
                    ajax: {
                        url: "{{ route('selectp') }}",
                        processResults: function({
                            data
                        }) {
                            return {
                                results: $.map(data, function(item) {
                                    return {
                                        id: item.id,
                                        text: item.product_name,
                                    }
                                })
                            }
                        }
                    }
                })
            });
        </script>

    </div>




</body>


</html>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
<link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
