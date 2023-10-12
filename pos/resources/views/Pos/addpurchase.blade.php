@extends('layout.sidebarandnav')

@section('title', 'Add Purchase');
@section('body')
    <p class=" text-2xl">Add Purchase</p>
    <div class="mt-3 rounded-lg shadow-lg p-5">
        <div class="flex w-full justify-around items-center space-x-3 p-5">
            <div class="mb-6 w-full">
                <label for="gender" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Supplier
                    Country</label>
                <select name="gender" id="gender"
                    class="bg-gray-50 border w-full border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                    <option value="0">Myanmar</option>
                    <option value="1">China</option>
                </select>
            </div>
            <div class="mb-6 w-full ">
                <label for="purchasedate" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Puchase Date
                </label>
                <input type="date" name="purchasedate" id="purchasedate"
                    class="bg-gray-50 border w-full border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block  p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                    placeholder="Category Name" required>
            </div>
            <div class="mb-6 w-full">
                <label for="status" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Shipping
                    Status</label>
                <select name="status" id="status"
                    class="bg-gray-50 border w-full border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                    <option value="0">Pending</option>
                    <option value="1">Received</option>
                </select>
            </div>

        </div>
        <div class="flex space-x-3 p-5 w-8/12 justify-items-center items-center">
            <div class="mb-6 w-full">
                <label for="product" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Product
                    Name</label>
                <select name="product" id="product"
                    class="bg-gray-50 border w-full border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                    @forelse ($products as $item)
                        <option value="{{ $item->id }}">{{ $item->product_name }}</option>
                    @empty
                    @endforelse
                </select>
            </div>
            <div class="mb-6 w-full ">
                <label for="purchasedate" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Puchase
                    Quantity
                </label>
                <input type="number" name="purchasedate" id="purchasedate"
                    class="bg-gray-50 border w-full border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block  p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                    placeholder="Quantity" required>
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
                            600
                        </td>
                    </tr>

                </tbody>
            </table>

        </div>
        <div class="mt-5 float-right">
            <span class=" font-semibold text-lg">Grand Total : </span>
            <input type="number" readonly class=" rounded-lg" name="grandtotal" id="">
        </div>
        <div class="mt-20 mb-5 flex flex-col">
        </div>
        <span class="mt-5 ml-[83%]">
            <button class=" bg-yellow-400 text-white rounded-lg font-medium px-5 py-2">Submit</button>
            <button class=" bg-gray-400 rounded-lg font-medium px-5 py-2">Cancel</button>
        </span>
    </div>




@endsection
