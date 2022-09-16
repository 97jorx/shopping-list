@extends('layout.template')

@section('title', 'Listas')

@section('content')

    <div class="lists-box text-xl grid grid-cols-4 gap-4 mb-10">

    @if ($lists->isNotEmpty())
        <div class="lists-box text-xl grid grid-cols-4 gap-4 mb-10">
            @foreach ($lists as $list)
                <a href="{{ route('lists.view', $list->id) }}" class="block p-6 max-w-sm bg-white rounded-lg border border-gray-200 shadow-md hover:bg-gray-100 dark:bg-gray-800 dark:border-gray-700 dark:hover:bg-gray-700">
                    <h5 class="font-bold tracking-tight text-gray-900 dark:text-white">{{$list->nombre}}</h5>
                    <p class="text-gray-700 dark:text-gray-400">{{$list->categoria}}</p>
                </a>
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

    </div>

    <div class='flex flex-wrap'>
        {{$lists->links()}}
    </div>

@endsection

