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

            <div class="card-body">
                <table id="products_table" class="w-full text-sm text-left text-gray-500 rounded-lg dark:text-gray-400">
                    <thead class="text-xs text-white uppercase bg-blue-400  dark:bg-gray-700 dark:text-gray-400">
                        <tr>
                            <th scope="col" class="px-6 py-3 rounded-l-lg">Product</th>
                            <th scope="col" class="px-6 py-3">Price</th>
                            <th scope="col" class="px-6 py-3">Quantity</th>
                            <th scope="col" class="px-6 py-3 rounded-r-lg">Amount</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr id="product0"
                            class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                            <td class="px-6 py-4">
                                <select name="products[]" id="select0"
                                    class="outline-none border-gray-300 rounded-md product_select">
                                    <option value="0">-- choose product --</option>
                                    @foreach ($products as $product)
                                        <option value="{{ $product->id }}">
                                            {{ $product->product_name }} (${{ number_format($product->price, 2) }})
                                        </option>
                                    @endforeach
                                </select>
                            </td>
                            <td class="px-6 py-3 ">
                                <input id="price" type="number" name=""
                                    class="outline-none border-transparent rounded-lg iprice" value="" />
                            </td>
                            <td>
                                <input type="number" name="quantities[]"
                                    class="outline-none border-gray-300 rounded-lg iquantity" value="1" />
                            </td>
                            <td>
                                <input type="number" name=""
                                    class="outline-none border-transparent rounded-lg itotal" value="" />
                            </td>
                        </tr>
                        <tr id="product1"></tr>
                    </tbody>
                </table>
                <div class="row">
                    <div class="col-md-12">
                        <button id="add_row" class=" bg-yellow-500 px-3 py-2 mt-5 rounded-lg">+ Add Row</button>
                        <button id='delete_row' class=" float-right bg-red-500 px-3 py-2 mt-5 rounded-lg"> Delete
                            Row</button>
                    </div>
                </div>
                <div class="mt-5 float-right">
                    <span class=" font-semibold text-lg">Grand Total : </span>
                    <input type="number" readonly class=" rounded-lg" name="grandtotal" id="">
                </div>
                <div class="mt-20 mb-5 flex flex-col">
                </div>
                <span class="mt-5 ml-[83%]">
                    <button type="submit"
                        class=" bg-yellow-400 text-white rounded-lg font-medium px-5 py-2">Submit</button>
                    <button type="button" class=" bg-gray-400 rounded-lg font-medium px-5 py-2">Cancel</button>
                </span>
            </div>
    </form>


    <script>
        var quantity = document.getElementsByClassName(
            'outline-none border-gray-300 rounded-md');
        for (var i = 0; i < quantity.length; i++) {
            quantity[i].addEventListener('change', function(event) {
                // Handle the change event here
                var products = @json($products);
                var itemWithid = products.find(function(item) {
                    return item.id === parseInt(event.target.value, 10);
                })

                if (itemWithid) {
                    var price = itemWithid.price;
                    document.getElementById('price').value = price;
                }
                // Get all select elements with the "product-select" class
                var selectElements = document.getElementsByClassName('product_select');

                // Add a change event listener to each select element
                for (var i = 0; i < selectElements.length; i++) {
                    selectElements[i].addEventListener('change', function(event) {
                        // Get the selected option value
                        // var selectedValue = event.target.value;

                        // // Loop through the options in this select element
                        // for (var j = 0; j < event.target.options.length; j++) {
                        //     var option = event.target.options[j];

                        // Disable or enable options based on the selected value
                        selectElements[i - 1].disabled = true;

                    });
                }


            });
        }
    </script>


    <script>
        $(document).ready(function() {
            let row_number = 1;
            $("#add_row").click(function(e) {

                var selectElements = document.getElementsByClassName('product_select');
                // console.log(selectElements.length);
                //     for (let j = 0; j < selectElements.length +1  ; j++) {
                //         selectElements[selectElements.length -1 ].disabled = true;
                       
                //     }
                e.preventDefault();
                let new_row_number = row_number - 1;

                $('#product' + row_number).html($('#product' + new_row_number).html()).find(
                    'td:first-child');
                $('#select' + row_number).html($('#select' + new_row_number).html()).find(
                    'option');
                $('#products_table').append('<tr class="border-b" id="product' + (row_number + 1) +
                    '"></tr>');
                row_number++;

                var quantity = document.getElementsByClassName(
                    'outline-none border-gray-300 rounded-md');
                for (var i = 0; i < quantity.length; i++) {
                    quantity[i].addEventListener('change', function(event) {
                        // Handle the change event here
                        var products = @json($products);
                        var itemWithid = products.find(function(item) {
                            return item.id === parseInt(event.target.value, 10);
                        })

                        if (itemWithid) {
                            var price = itemWithid.price;
                            console.log(price);
                            var iprice = document.getElementsByClassName("iprice");
                            for (let i = 0; i < iprice.length; i++) {
                                iprice[iprice.length - 1].value = price;
                            }

                            

                            // Add a change event listener to each select element
                            for (var i = 0; i < selectElements.length; i++) {
                                selectElements[i].addEventListener('click', function(event) {
                                    // Get the selected option value
                                    // var selectedValue = event.target.value;

                                    // // Loop through the options in this select element
                                    // for (var j = 0; j < event.target.options.length; j++) {
                                    //     var option = event.target.options[j];

                                    // Disable or enable options based on the selected value
                                    selectElements[i - 2].disabled = true;
                                });
                            }
                        }


                        console.log("Select element with the specified class names changed:", event
                            .target
                            .value);
                    });
                }

                var productSelects = document.getElementsByClassName(
                    'outline-none border-gray-300 rounded-lg');
                for (var i = 0; i < productSelects.length; i++) {
                    productSelects[i].addEventListener('change', function(event) {
                        // var selectElements = document.getElementsByClassName('product_select');

                        // // Add a change event listener to each select element
                        // for (var i = 0; i < selectElements.length; i++) {
                        //     selectElements[i].addEventListener('change', function(event) {
                        //         // Get the selected option value
                        //         var selectedValue = event.target.value;

                        //         // Loop through the options in this select element
                        //         for (var j = 0; j < event.target.options.length; j++) {
                        //             var option = event.target.options[j];

                        //             // Disable or enable options based on the selected value
                        //             option.disabled = true;
                        //         }
                        //     });
                        // }
                    });
                }
            });



            $("#delete_row").click(function(e) {
                e.preventDefault();
                if (row_number > 1) {
                    $("#product" + (row_number - 1)).html('');
                    row_number--;
                }else{
                    location.reload();
                }
            });
        });
    </script>


@endsection
