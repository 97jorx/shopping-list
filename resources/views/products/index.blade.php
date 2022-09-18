@extends('layout.template')

@section('title', 'Productos')

@section('content')

    @if ($products->isNotEmpty())
        <div class="products-box grid lg:grid-cols-4 md:grid-cols-3 sm:grid-cols-2 gap-5 ">
            @foreach ($products as $product)

                <div class='flex flex-col text-center rounded-lg border border-gray-200 shadow-md dark:bg-gray-800 dark:border-gray-700 dark:hover:bg-gray-700'>

                    <h2 class="h-12 m-6">{{$product->nombre}}</h2>

                    <div class="text-xl border rounded">
                        <i class="hover:text-lime-500 text-blue-300 fa fa-plus-circle" aria-hidden="true"></i>
                        <i class="hover:text-red-500 text-blue-300 fa fa-times-circle" aria-hidden="true"></i>
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
