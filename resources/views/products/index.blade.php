@extends('layout.template')

@section('title', 'Productos')

@section('content')

    <div class="products-box text-xl grid grid-cols-4 gap-4 mb-10">

        @foreach ($products as $product)
            <a href="{{ route('products.view', $product->id) }}" class="block p-6 max-w-sm bg-white rounded-lg border border-gray-200 shadow-md hover:bg-gray-100 dark:bg-gray-800 dark:border-gray-700 dark:hover:bg-gray-700">
                <h5 class="font-bold tracking-tight text-gray-900 dark:text-white">{{$product->nombre}}</h5>
                <p class="text-gray-700 dark:text-gray-400">{{$product->categoria}}</p>
            </a>
        @endforeach

    </div>

    <div class='flex flex-wrap'>
        {{$products->links()}}
    </div>

@endsection

