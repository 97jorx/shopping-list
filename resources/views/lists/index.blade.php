@extends('layout.template')

@section('title', 'Listas')

@section('content')

    <a href="{{ route('lists.create') }}" class="border-2 cursor-pointer rounded-2xl hover:border-lime-500 border-gray-400 font-bold mb-5 py-4 px-4 rounded ">
        <i class="text-grey-300  fa fa-plus-circle" aria-hidden="true"></i>
        <span class='pl-3'>Crear lista</span>
    </a>

    @if ($lists->isNotEmpty())
        <div class="flex justify-center">
            <div class="mt-10 border-2 w-132 h-full rounded-2xl border-zinc-600 ">
                @foreach ($lists as $key => $list)
                    <label for='checkbox{{$key}}'>
                        <div class="border-b-2 border-gray-500 cursor">
                            <div class="flex items-center  h-24 pl-5">
                                <input id='checkbox{{$key}}' type="checkbox" class="h-4 w-4 rounded-full shadow" />
                                <span class="pl-8">{{$list->nombre}}</span>
                            </div>
                        </div>
                    </label>
                @endforeach
                <div id="footer-list" class="flex justify-center mt-5 mb-5 space-x-10 text-xs uppercase">
                    <div class="basis-2/4">Mostrando {{count($lists)}} elementos</div>
                    <div><a href="">Marcar todas</a></div>
                    <div><a href="">Eliminar</a></div>
                </div>
            </div>
        </div>
        @else
        <div class="max-w-screen-lg bg-white mx-auto rounded-lg text-center py-11 mt-4">
            <h5 class="text-2xl leading-9 font-bold tracking-tight text-gray-800 sm:text-2xl sm:leading-10">
                No se han encontrado productos.
            </h5>
        </div>
        <img class='gif-logo object-cover mx-auto h-48 w-96' src="{{ asset('storage/nothing-logo.gif') }}" alt="nothing">
        @endif

        <div class='flex flex-wrap justify-center mt-14'>
            {{$lists->links()}}
        </div>


@endsection

