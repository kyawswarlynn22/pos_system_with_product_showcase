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


        <title>Service notes and Solution images & videos</title>
    </head>

    <body>
        <nav
        class=" bg-green-700  dark:bg-gray-900 fixed w-full z-20 top-0 left-0 border-b border-gray-200 dark:border-gray-600">
        <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto p-4">
            <div class="text-center">
                <a href="/complaint/create">
                    <button type="button"
                        class="text-white ml-2 bg-green-500 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-4 py-2 text-center md:mr-0 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                        <div class="flex justify-center items-center">
                            <p>Add Complaint</p>
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
<p class=" text-2xl mt-10 ml-5">Solution Details</p>

<div class="ml-5 mr-5 mt-5 bg-gray-200 px-5 py-1 shadow-lg rounded-lg">
    <p class="font-semibold mt-5 text-lg">Service Note</p>
    <p class="mt-3">{{ $Solution->solution }}</p>
</div>
<div class=" text-2xl mt-10 ml-5 font-bold">Solution Images</div>
<div class=" flex justify-around mx-5 mt-5">
    <img class="w-96 bg-gray-200 shadow-2xl rounded-lg" src="{{ $Solution->photo_one }}" alt="">
    <img class=" w-96 shadow-2xl rounded-xl" src="{{ $Solution->photo_two }}" alt="">
    <img class=" w-96 shadow-2xl rounded-xl" src="{{ $Solution->photo_three }}" alt="">
</div>
<div class=" text-2xl mt-10 ml-5 font-bold">Solution Videos</div>
<div class=" flex justify-between mx-5 mt-5 mb-5">
    <video controls class="w-5/12 shadow-2xl  rounded-xl" src="{{ $Solution->video_one }}"></video>
    <video controls class="w-5/12 shadow-2xl rounded-xl" src="{{ $Solution->video_two }}"></video>
</div>



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
