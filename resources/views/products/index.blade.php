@extends('layout.template')

@section('title', 'Productos')

@section('content')

    <div class="product-buttons mb-12 mx-6 flex justify-center sm:justify-center md:justify-center lg:justify-start inline-flex items-center">

        <a href="{{ route('products.create') }}" class="border-2 cursor-pointer rounded-2xl hover:border-lime-500 border-gray-400 font-bold py-4 px-4 rounded ">
            <i class="text-grey-300  fa fa-plus-circle" aria-hidden="true"></i>
            <span class='pl-3'>Añadir producto</span>
        </a>

    </div>

    @if ($products->isNotEmpty())
        <div class="products-box grid lg:grid-cols-4 md:grid-cols-2 sm:grid-cols-2 gap-3 lg:gap-3 md:gap-5">
            @foreach ($products as $product)
                <div class='text-grey-300 lg:h-36 lg:w-full md:w-72 sm:w-full mx-6 font-bold text-center shadow-lg border-2 rounded-2xl'>
                    <div class="flex justify-end px-4 pt-2">
                        <button id="dropdownButton" data-dropdown-toggle="dropdown" class="inline-block text-gray-500 dark:text-gray-400 hover:bg-gray-100 dark:hover:bg-gray-700 focus:ring-4 focus:outline-none focus:ring-gray-200 dark:focus:ring-gray-700 rounded-lg text-sm p-1.5" type="button">
                            <span class="sr-only">Open dropdown</span>
                            <svg class="w-4 h-4" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M6 10a2 2 0 11-4 0 2 2 0 014 0zM12 10a2 2 0 11-4 0 2 2 0 014 0zM16 12a2 2 0 100-4 2 2 0 000 4z"></path></svg>
                        </button>
                        <div id="dropdown" class="hidden z-10 w-20 text-base list-none rounded border-2 bg-white rounded divide-y divide-gray-100 shadow dark:bg-gray-700">
                            <ul class="py-1" aria-labelledby="dropdownButton">
                            <li>
                                <form action="{{ route('products.delete', $product) }}" method="POST">
                                    @csrf
                                    @method("DELETE")
                                    <input type="submit" class="block py-2 px-4 text-sm text-red-600 hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-gray-200 dark:hover:text-white" value='Borrar'>
                                </form>
                                </i></a>
                            </li>
                            <li>
                                <a href="#" class="block py-2 px-4 text-sm text-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-gray-200 dark:hover:text-white">Editar</a>
                            </li>
                            <li>
                                <a href="{{ route('products.show', $product) }}" class="block py-2 px-4 text-sm text-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-gray-200 dark:hover:text-white">Ver</a>
                            </li>
                            </ul>
                        </div>
                    </div>
                    <h2 class="m-4 lg:m-4 md:m-3 sm:m-6">{{$product->nombre}}</h2>
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
