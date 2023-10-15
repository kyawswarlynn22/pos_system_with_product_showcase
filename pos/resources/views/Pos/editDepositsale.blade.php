@extends('layout.sidebarandnav')

@section('title', 'Edit Deposit Sale');
@section('body')
    <p class=" text-2xl">Edit Deposit Sale</p>
    <form action="/purchase" method="post">
        @csrf
        <div class="mt-3 rounded-lg shadow-lg p-5">
            <div class="row">
                <div class="col-xs-6 col-sm-6 col-md-6 ">
                    <span id="day"></span> : <span id="year"></span>
                </div>
                <div class="col-xs-6 col-sm-6 col-md-6 text-right">
                    <span>Invoice: {{ $lastId + 1 }}</span>
                </div>
            </div>
            <div class="flex w-full justify-around items-center space-x-3 p-5">
                <div class="mb-6 w-full">
                    <label for="customer" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Customer Name
                    </label>
                    <select name="customer" id="customer"
                        class="bg-gray-50 border w-full border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                        @forelse ($customerList as $item)
                            <option value="{{ $item->id }}">{{ $item->cus_name }}</option>
                        @empty
                            <option value="">No Customer</option>
                        @endforelse


                    </select>
                </div>


                <div class="mb-6 w-full">
                    <label for="status" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Product Sent
                    </label>
                    <select name="status" id="status"
                        class="bg-gray-50 border w-full border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                        <option value="0">No</option>
                        <option value="1">Yes</option>
                    </select>
                </div>

            </div>
            <div class="flex space-x-3 p-5 w-8/12 justify-items-center items-center">
                <div class="mb-6 w-full">
                    <label for="product" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Product
                        Name</label>
                    <select name="product" id="productselect"
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
                    <label for="purchasedate" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Puchase
                        Quantity
                    </label>
                    <input type="number" min="0" value="1" name="purchasedate" id="itemQuantity"
                        class="bg-gray-50 border w-full border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block  p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                        placeholder="Category Name" required>
                </div>
                <button type="button" id="add"
                    class=" bg-yellow-400 text-white rounded-lg font-medium px-5 w-60 py-2 get-details">Add to
                    list</button>
            </div>
            <div class="card-body">
                <table id="products_table" class="w-full text-sm text-left text-gray-500 rounded-lg dark:text-gray-400">
                    <thead class="text-xs text-white uppercase bg-blue-400  dark:bg-gray-700 dark:text-gray-400">
                        <tr>
                            <th scope="col" class="px-6 py-3 rounded-l-lg">Product</th>
                            <th scope="col" class="px-6 py-3">Price</th>
                            <th scope="col" class="px-6 py-3">Quantity</th>
                            <th scope="col" class="px-6 float-right py-3">Amount</th>
                            <th scope="col" class="px-6 py-3 rounded-r-lg"></th>
                        </tr>
                    </thead>
                    <tbody id="new">
                    </tbody>
                </table>
                <div class="flex justify-end">
                    <button id="delBut" type="button" class=" bg-red-500 px-2 py-1 rounded-md my-5">Delete Row</button>
                </div>

                <div class=" flex  flex-col justify-end items-end">
                    <div class="flex mt-5 space-x-3  ">
                        <span class=" font-semibold text-lg">Discount : </span>
                        <input value="" type="number" class=" rounded-lg" name="discount" id="discount">
                    </div>
                    <div class="flex mt-5 space-x-3 ">
                        <span class=" font-semibold text-lg">Grand Total : </span>
                        <input readonly type="number" class=" rounded-lg" name="grandtotal" id="gtotal">
                    </div>
                    <div class="flex mt-5 space-x-3  ">
                        <span class=" font-semibold text-lg">Deposit Paid : </span>
                        <input type="number" class=" rounded-lg" name="discount" id="">
                    </div>
                    <div class="flex mt-5 space-x-3 ">
                        <span class=" font-semibold text-lg">Credit Balance : </span>
                        <input readonly type="number" class=" rounded-lg" name="grandtotal" id="">
                    </div>
                </div>

                <div class="mt-15 mb-5 flex flex-col">
                    <label for="description">Remarks</label>
                    <textarea name="remark" id="" cols="100" rows="2"></textarea>
                </div>
                <span class="mt-5 ml-[83%]">
                    <button type="submit"
                        class=" bg-yellow-400  text-white rounded-lg font-medium px-5 py-2">Submit</button>
                    <button type="button" class=" bg-gray-400 rounded-lg font-medium px-5 py-2">Cancel</button>
                </span>
            </div>
    </form>
    <input type="hidden" id="discount">
    <script src="{{ asset('js/calculation.js') }}" defer></script>



@endsection
