@extends('layout.template')

@section('title', 'Productos')

@section('content')

    <div class="product-buttons mb-12 mx-6 flex justify-center">

        <a href="{{ route('products.create') }}" class="border-2 cursor-pointer rounded-2xl hover:border-lime-500 border-gray-400 font-bold py-4 px-4 rounded ">
            <i class="text-grey-300  fa fa-plus-circle" aria-hidden="true"></i>
            <span class='pl-3'>Añadir producto</span>
        </a>

    </div>

    @if ($products->isNotEmpty())
        <div id="content-products" class="products-box flex justify-center flex-wrap gap-5">
            <content></content>            
        </div>
        
    @else
        <div class="max-w-screen-lg bg-white rounded-lg mx-auto text-center py-11 mt-4">
            <h2 class="text-2xl leading-9 font-bold tracking-tight text-gray-800 sm:text-2xl sm:leading-10">
                No se han encontrado productos.
            </h2>
        </div>
        <img class='gif-logo mx-auto object-cover h-48 w-96' src="{{ asset('storage/nothing-logo.gif') }}" alt="nothing">
    @endif




@endsection