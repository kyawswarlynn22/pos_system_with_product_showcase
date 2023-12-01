

@php
    $userRole = Session::get('userRole');

@endphp

@if ($userRole == 0)
    @include('layout.sidebarandnav')
@endif

@section('title', 'Complaint List');

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
 

    <title>Complaint List</title>
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
    <p class=" text-2xl mt-10 ml-5">Complaint List</p>

    <div class="relative overflow-x-auto shadow-md sm:rounded-lg p-5">
        <div class="pb-4 bg-white dark:bg-gray-900">
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
                        Customer Name
                    </th>
                    <th scope="col" class="px-6 text-center  py-3">
                        Phone
                    </th>
                    <th scope="col" class="px-6 text-center  py-3">
                        Date
                    </th>
                    <th scope="col" class="px-6 text-center  py-3">
                        Status
                    </th>
                    <th scope="col" class="px-6 py-3 text-center  rounded-r-lg">
                        Action
                    </th>
                </tr>
            </thead>
            <tbody>
             
                @forelse ($Complaint as $item)
                    <tr
                        class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                        <th scope="row"
                            class="px-6 text py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                            {{ $item->customer_name }}
                        </th>
                        <td class="px-6 text-center  py-4">
                            {{ $item->phone }}
                        </td>
                        <td class="px-6 text-center  py-4">
                            {{ $item->created_at }}
                        </td>
                       
                        <td class="px-6 text-center  py-4">
                           @if ($item->solve_status == 0)
                               <span class=" text-red-500">Unsolve</span>
                           @else
                           <span class=" text-green-500">Solved</span>
                           @endif
                        </td>
                        <td class="px-6 py-4 flex justify-center space-x-2 ">
                            @if ($item->solve_status == 1)
                            <a href="/complaint/{{ $item->id }}">
                               <button class="bg-sky-400 text-white px-1 py-1 rounded-lg">View Solution</button>
                            </a>
                        @endif
                                <a href="/complaint/{{ $item->id }}/edit">
                                    <button class="bg-sky-400 text-white px-1 py-1 rounded-lg">Add Solution</button>
                                    
                                </a>

                            <form action="/complaint/{{ $item->id }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button class="bg-red-600 text-white px-2 py-1 rounded-lg">Delete</button>
                            </form>
                        </td>
                    </tr>
                @empty
                    <div class=" text-red-500 text-xl font-bold ">No Credit Sale List</div>
                @endforelse
            </tbody> 
        </table>
        @foreach ($Complaint as $item)
            <span class="created-at hidden">{{ $item->created_at }}</span>
        @endforeach
        <div class="p-5">
            {{ $Complaint->links('pagination::tailwind') }}
        </div>
    </div>

    @if ($userRole == 1)
</body>
</html>
@endif