@extends('layout.template')

@section('title', 'Create')
@section('content')

    <h1 class='mb-10 uppercase font-bold'>Añade un producto</h1>

    <form action="{{ route('products.store') }}" method="POST" class="w-full max-w-lg">
        <div class="flex flex-wrap -mx-3 mb-6">
          <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">

            <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-first-name-product">
                NOMBRE DEL PRODUCTO
            </label>
            <input class="appearance-none block w-full bg-gray-200 text-gray-700 border hidden:border-red-500 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white" id="grid-first-name" type="text">
            <p class="hidden text-red-500 text-xs italic">Please fill out this field.</p>

            <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-first-name-product">
                CATEGORÍA
            </label>
            <input class="appearance-none block w-full bg-gray-200 text-gray-700 border hidden:border-red-500 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white" id="grid-first-name" type="text">
            <p class="hidden text-red-500 text-xs italic">Please fill out this field.</p>

          </div>
        </div>
        <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline" type="button">
            GUARDAR
        </button>
      </form>

@endsection

