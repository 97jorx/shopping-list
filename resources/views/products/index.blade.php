@extends('layout.template')

@section('title', 'Productos')

@section('content')

    <div class="product-buttons mb-5">
        <button class="border-2 cursor-pointer rounded-2xl hover:border-lime-500 border-gray-400 font-bold py-4 px-4 rounded inline-flex items-center">
            <i class="text-grey-300 fa fa-plus-circle" aria-hidden="true"></i>
            <span class='pl-3'>Añadir producto</span>
        </button>
    </div>

    @if ($products->isNotEmpty())
        <div class="products-box grid lg:grid-cols-4 md:grid-cols-3 sm:grid-cols-2 gap-5 ">
            @foreach ($products as $product)

                <div class='text-grey-300 font-bold relative text-center shadow-xl border-2 rounded-2xl'>
                    <h2 class="h-12 m-6">{{$product->nombre}}</h2>
                    <i class="cursor-pointer absolute top-0 right-0 text-red-500 text-xl hover:text-2xl mr-1 fa fa-times-circle" aria-hidden="true"></i>
                </div>

            @endforeach
        </div>
    @else
        <div class="max-w-screen-lg bg-white rounded-lg mx-auto text-center py-11 mt-4">
            <h2 class="text-2xl leading-9 font-bold tracking-tight text-gray-800 sm:text-2xl sm:leading-10">
                No se han encontrado productos.
            </h2>
        </div>
        <img class='gif-logo mx-auto object-cover h-48 w-96' src="{{ asset('storage/nothing-logo.gif') }}" alt="nothing">
    @endif

    <div class='flex flex-wrap justify-center mt-14'>
        {{$products->links()}}
    </div>

@endsection
