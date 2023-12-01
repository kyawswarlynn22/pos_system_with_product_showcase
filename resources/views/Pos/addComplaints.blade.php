@php
    $userRole = Session::get('userRole');

@endphp

@if ($userRole == 0)
    @include('layout.sidebarandnav')
@endif

@section('title', 'Add Complaint');


@if ($userRole == 1)
    <!DOCTYPE html>
    <html lang="en">

    <head>

        @php
            $logo = session()->get('logo');
            $business_name = session()->get('business_name');
        @endphp
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <link rel="icon" href="{{ $logo }}" sizes="16x16" type="image/png/jpeg">
        <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js" defer></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" defer></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.8.1/flowbite.min.js" defer></script>
        @vite('resources/css/app.css')
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <script src="https://kit.fontawesome.com/31104486ca.js" crossorigin="anonymous"></script>
        <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.8.1/flowbite.min.css" rel="stylesheet" />


        <title>Add Complaints</title>
    </head>

    <body>
        <nav
            class=" bg-green-700  dark:bg-gray-900 fixed w-full z-20 top-0 left-0 border-b border-gray-200 dark:border-gray-600">
            <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto p-4">
              
                    <div class="text-center">
                        <a href="/complaint">
                            <button type="button"
                                class="text-white ml-2 bg-green-500 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-4 py-2 text-center md:mr-0 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                                <div class="flex justify-center items-center">
                                    <p class="mx-1"> <svg width="24" height="24" viewBox="0 0 512 512"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path fill="#ffffff"
                                                d="M208 80h264v32H208zM40 96a64 64 0 1 0 64-64a64.072 64.072 0 0 0-64 64Zm64-32a32 32 0 1 1-32 32a32.036 32.036 0 0 1 32-32Zm104 176h264v32H208zm-104 80a64 64 0 1 0-64-64a64.072 64.072 0 0 0 64 64Zm0-96a32 32 0 1 1-32 32a32.036 32.036 0 0 1 32-32Zm104 176h264v32H208zm-104 80a64 64 0 1 0-64-64a64.072 64.072 0 0 0 64 64Zm0-96a32 32 0 1 1-32 32a32.036 32.036 0 0 1 32-32Z" />
                                        </svg></p>
                                    <p>Complaints List</p>
                                </div>
                            </button>
                        </a>
                    </div>
                <div class=" text-white font-medium" id="clock"></div>
                <div class="flex md:order-2">
                    <a href="/signout">
                        <button type="button"
                            class="text-white ml-2 bg-green-500 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-4 py-2 text-center md:mr-0 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                            <div class="flex justify-center items-center">
                                <p class="mx-1"> <svg width="24" height="24" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                    <path fill="#ffffff"
                                        d="m17 8l-1.4 1.4l1.6 1.6H9v2h8.2l-1.6 1.6L17 16l4-4l-4-4M5 5h7V3H5c-1.1 0-2 .9-2 2v14c0 1.1.9 2 2 2h7v-2H5V5Z" />
                                </svg></p>
                                <p>Logout</p>
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
                    <a class="flex items-center">
                        <img src="{{ $logo }}" class="h-10 mr-3" alt="SKS Logo">
                        <span
                            class="self-center text-2xl font-semibold whitespace-nowrap text-white dark:text-white">{{ $business_name }}</span>
                    </a>
                </div>
            </div>
        </nav>
@endif

<p class=" text-2xl mt-10 ml-10">Add Complaint</p>
<form action="/complaint" method="post" enctype="multipart/form-data">
    @csrf
    <div class="mt-3 rounded-lg shadow-lg p-5">
        <div class="flex w-full justify-around items-center space-x-3 p-5">
            <div class="mb-6 w-full ">
                <label for="name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                    Customer Name
                </label>
                <input type="text" name="name" id="name"
                    class="bg-gray-50 border w-full border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block  p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                    placeholder="Name">
            </div>
            <div class="mb-6 w-full ">
                <label for="phone" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                    Phone
                </label>
                <input type="text" name="phone" id="phone"
                    class="bg-gray-50 border w-full border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block  p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                    placeholder="Phone">
            </div>
            <div class="mb-6 w-full">
                <label for="address" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Address
                </label>
                <input name="address" id="address"
                    class="bg-gray-50 border w-full border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
            </div>
        </div>

        <div class="mt-50 p-5 mb-5  flex flex-col">
            <label for="description">Cheif Complaint</label>
            <textarea name="description" class=" rounded-lg " name="description" id="" cols="100" rows="2"></textarea>
            @error('description')
                <p class=" text-red-500">{{ $message }}</p>
            @enderror
        </div>
        <p class="px-5 font-bold text-xl">Upload Images</p>
        <div class=" p-5 flex justify-between">
            <div
                class=" w-56 h-56 shadow-xl  justify-center flex-col items-center flex outline-dotted outline-gray-400 rounded-lg">
                <label for="photo1">
                    <img class="h-52" src="{{ asset('images/upload-filled.png') }}" id="photoimg1" alt="">
                </label>
                <input type="file" class=" hidden" id="photo1" accept=".png,.jpeg" name="photo1">
                @error('photo1')
                    <p class=" text-red-500">{{ $message }}</p>
                @enderror
            </div>
            <div
                class=" w-56 h-56 shadow-xl  justify-center flex-col items-center flex outline-dotted outline-gray-400 rounded-lg">
                <label for="photo2">
                    <img class="h-52" src="{{ asset('images/upload-filled.png') }}" id="photoimg2" alt="">
                </label>
                <input type="file" class=" hidden" id="photo2" accept=".png,.jpeg" name="photo2">
            </div>
            <div
                class=" w-56 h-56 shadow-xl  justify-center flex-col items-center flex outline-dotted outline-gray-400 rounded-lg">
                <label for="photo3">
                    <img class="h-52" src="{{ asset('images/upload-filled.png') }}" id="photoimg3" alt="">
                </label>
                <input type="file" class=" hidden" id="photo3" accept=".png,.jpeg" name="photo3">
            </div>

        </div>
        <p class="px-5 font-bold text-xl mb-5">Upload Videos</p>
        <div class="ml-5">
            <input type="file" name="video1">
            <input type="file" name="video2">
        </div>
        <span class="mt-5 ml-[83%]">
            <button class=" bg-yellow-400 text-white rounded-lg font-medium px-5 py-2">Submit</button>
            <button class=" bg-gray-400 rounded-lg font-medium px-5 py-2">Cancel</button>
        </span>
</form>

@if (session('success'))
    <script>
        let msg = @json(session('success'));
        swal("Done", msg, "success");
    </script>
@endif
@if (session('fail'))
    <script>
        let msg = @json(session('fail'));
        swal("Done", msg, "error");
    </script>
@endif

</div>
@if ($userRole == 1)
    </body>

    </html>
@endif

<script src="{{ asset('js/uploadPhoto.js') }}" defer></script>
