@extends('layout.sidebarandnav')

@section('title', 'Product Details');
@section('body')
    <p class=" text-2xl">Product Details</p>
    <section class=" flex justify-around items-center">
    <section>
        <div class=" flex-col flex justify-center items-center ml-20 w-64 rounded-lg shadow-xl p-5">
            <div>
                <img class=" shadow-md" src="{{ asset('images/SKS Logo.png') }}" alt="">
            </div>
            <div class="flex pt-2">
                <img class=" w-20 h-20" src="{{ asset('images/SKS Logo.png') }}" alt="">
                <img class=" w-20 h-20" src="{{ asset('images/SKS Logo.png') }}" alt="">
                <img class=" w-20 h-20" src="{{ asset('images/SKS Logo.png') }}" alt="">
            </div>
            <span class=" pb-5 text-xl font-bold">Battery</span>
        </div>
        

    </section>
  
    <section class=" flex space-x-5">
        <div class="flex flex-col">
            <span>Product Name</span>
            <span>Ah</span>
            <span>jack</span>
            <span>price</span>
        </div>
        <div class=" flex flex-col">
            <span>-></span>
            <span>-></span>
            <span>-></span>
            <span>-></span>
        </div>
        <div class=" flex flex-col">
            <span>Battery</span>
            <span>150Ah</span>
            <span>Yoko</span>
            <span>Jack</span>
        </div>
    </section>
    </section>
@endsection
