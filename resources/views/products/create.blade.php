@extends('layout.template')

@section('title', 'Create')
@section('content')

    <h1 class='mb-10 uppercase font-bold'>Añade un producto</h1>

    <form action="{{ route('products.store') }}" method="POST" class="w-full max-w-lg">
        @csrf
        <div class="flex flex-wrap -mx-3 mb-6">
          <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0 space-y-5">

            <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-first-name-product">
                NOMBRE DEL PRODUCTO
            </label>
            <input class="appearance-none block w-full bg-gray-200 text-gray-700 border rounded @error('nombre') is-invalid border-red-500 @enderror  py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white" id="grid-first-name" type="text" name='nombre'>

            @error('nombre')
                <p class="text-red-500 text-xs italic">{{$message}}</p>
            @enderror

            <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-first-name-product">
                CATEGORÍA
            </label>
            <input class="appearance-none block w-full bg-gray-200 text-gray-700 border @error('nombre') is-invalid border-red-500 @enderror rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white" id="grid-first-name" type="text" name='categoria'>

            @error('categoria')
                <p class="text-red-500 text-xs italic">{{$message}}</p>
            @enderror

          </div>
        </div>
        <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline" type="submit">
            GUARDAR
        </button>
      </form>

@endsection

