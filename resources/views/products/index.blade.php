@extends('layout.template')

@section('title', 'Productos')

@section('content')

    <div class="product-buttons mb-5 mx-6 flex justify-center sm:justify-center md:justify-center lg:justify-start">
        <button class="border-2 cursor-pointer rounded-2xl hover:border-lime-500 border-gray-400 font-bold py-4 px-4 rounded inline-flex items-center">
            <i class="text-grey-300  fa fa-plus-circle" aria-hidden="true"></i>
            <span class='pl-3'>Añadir producto</span>
        </button>
    </div>

    @if ($products->isNotEmpty())
        <div class="products-box grid lg:grid-cols-4 md:grid-cols-3 sm:grid-cols-2 gap-5 md:gap-3 ">
            @foreach ($products as $product)

                <div class='text-grey-300 lg:w-full md:w-full sm:w-full mx-6 font-bold relative text-center shadow-xl border-2 rounded-2xl'>
                    <h2 class="h-12 m-4 lg:m-7 md:m-3 sm:m-6">{{$product->nombre}}</h2>
                    <div class="shadow-lg absolute top-0 right-0 bg-zinc-500">
                        <i class="cursor-pointer absolute top-0 right-0 text-red-500 text-xl hover:text-2xl mr-1 fa fa-times-circle" aria-hidden="true"></i>
                    </div>
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
