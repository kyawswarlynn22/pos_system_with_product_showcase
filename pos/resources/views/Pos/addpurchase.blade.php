@extends('layout.sidebarandnav')

@section('title', 'Add Purchase');
@section('body')
    <p class=" text-2xl">Add Purchase</p>
    <form action="/purchase" method="post">
        @csrf
        <div class="mt-3 rounded-lg shadow-lg p-5">
            <div class="flex w-full justify-around items-center space-x-3 p-5">
                <div class="mb-6 w-full">
                    <label for="country" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Supplier
                        Country</label>
                    <select name="country" id="country"
                        class="bg-gray-50 border w-full border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                        <option value="0">Myanmar</option>
                        <option value="1">China</option>
                    </select>
                </div>
                <div class="mb-6 w-full ">
                    <label for="purchasedate" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Puchase
                        Date
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

                <div class="mt-5 float-right">
                    <span class=" font-semibold text-lg">Grand Total : </span>
                    <input type="number" class=" rounded-lg" name="grandtotal" id="">
                </div>
                <div class="mt-20 mb-5 flex flex-col">
                </div>
                <span class="mt-5 ml-[83%]">
                    <button type="submit"
                        class=" bg-yellow-400  text-white rounded-lg font-medium px-5 py-2">Submit</button>
                    <button type="button" class=" bg-gray-400 rounded-lg font-medium px-5 py-2">Cancel</button>
                </span>
            </div>
    </form>


    <script>
        $(document).ready(function() {
            var items = document.getElementById("itemQuantity");
            document.getElementById("add").disabled = true;
            var selectElement = document.getElementById("productselect");

            selectElement.addEventListener('change', function() {
                document.getElementById("add").disabled = false;
            })
            items.addEventListener('keyup', function() {
                var itemQuantity = items.value;
                if (itemQuantity < 1 || itemQuantity > 100) {
                    items.value = "";
                }
            })

            $('.get-details').click(function() {
                var button = $(this);
                var selectElement = document.getElementById("productselect");
                var selectedValue = selectElement.value;
                var items = document.getElementById("itemQuantity");
                var itemQuantity = items.value;

                $.ajax({
                    url: '/get-product-details/' + selectedValue,
                    type: 'GET',
                    success: function(data) {
                        if (data.error) {
                            namePlaceholder.text('Error: ' + data.error);
                            pricePlaceholder.text('');
                        } else {
                            var table =
                                '<tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">' +
                                '<td class="px-6 py-4">' +
                                '<input type="text" readonly id="productinput" class="outline-none border-gray-300 border-transparent rounded-md product_select" value="' +
                                data.product_name + '">' +
                                '</td>' +
                                '<td class="px-6 py-3">' +
                                '<input  type="number" readonly  name="" class="outline-none border-transparent rounded-lg iprice" value="' +
                                data.price + '" />' +
                                '</td>' +
                                '<td>' +
                                '<input type="number" readonly name="quantities[]" class="outline-none border-transparent border-gray-300 rounded-lg iquantity" value="' +
                                itemQuantity + '" />' +
                                '</td>' +
                                '<td>' +
                                '<input type="text" name="" readonly class="outline-none w-full text-right float-right border-transparent rounded-lg itotal" value="' +
                                +'" />' +
                                '</td>' +
                                '<td class="px-6 py-4">' +
                                '<input type="text" readonly name="productsid[]" hidden id="productinput" class="outline-none border-gray-300 border-transparent rounded-md product_select" value="' +
                                selectedValue + '">' +
                                '</td>' +
                                '</tr>';

                            $('#new').append(table);
                            var iprice = document.getElementsByClassName("iprice");
                            var itotal = document.getElementsByClassName("itotal")
                            var iquantity = document.getElementsByClassName("iquantity");

                            for (let i = 0; i < iprice.length; i++) {
                                const numberOnly = (iprice[i].value * iquantity[i].value)
                                    .toString(); // Convert the result to a string

                                const number = parseFloat(numberOnly.replace(/[^0-9]/g, ""));
                                const formattedNumber = number.toLocaleString();
                                itotal[i].value = formattedNumber;

                                // gt = gt + (iprice[i].value) * (iquantity[i].value);
                            }

                        }
                    },
                    error: function(xhr, status, error) {
                        console.error(error);
                    }
                });
            });
        });
    </script>
    <script>
        // var gtotal = document.getElementById("gtotal");


        function subTotal() {

        }
        subTotal();
    </script>


@endsection
