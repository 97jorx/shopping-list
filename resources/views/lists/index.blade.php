@extends('layout.template')

@section('title', 'Listas')

@section('content')


    <div class="flex justify-center ">
        <form action="{{ route('lists.store') }}" method="POST" >
            @csrf
            <i class="absolute ml-5 mt-6 fa fa-plus-circle" aria-hidden="true"></i>
            <input placeholder="Nombre de la lista..." class="cursor-pointer border-2 lg:w-132 rounded-2xl border-gray-400 font-bold px-12 py-4 rounded"  name='nombre' type="text">
            <input type="submit" class='hidden' />
        </form>
    </div>

    @if ($lists->isNotEmpty())
        <div class="flex justify-center">
            <div class="mt-10 border-2 w-132 h-full rounded-2xl border-gray-400 overflow-hidden">
                <form action="{{ route('lists.delete') }}" method="POST" >
                    @csrf
                    @method('DELETE')
                    @foreach ($lists as $key => $list)
                        <div class="hover:bg-gray-200 border-b-2 border-gray-500 cursor">
                                <label for='checkbox{{$key}}'>
                                <div class="cursor-pointer flex items-center h-24 pl-5">
                                    <input id="checkbox{{$key}}" name="checkbox[]" value="{{$list->id}}" type="checkbox" class="h-4 w-4 rounded-full shadow" />
                                    <span class="font-bold pl-8">{{$list->nombre}}</span>
                                </div>
                            </label>
                        </div>
                    @endforeach
                    <div id="footer-list" class="flex justify-center mt-5 mb-5 space-x-10 text-xs uppercase">
                        <div class="basis-2/4">Mostrando {{count($lists)}} elementos</div>
                        <a class="cursor-pointer bg-blue-500 hover:bg-blue-700 text-white font-bold py-1 px-2 rounded-full">Marcar todas</a>
                        <button type="submit" class="cursor-pointer bg-red-500 hover:bg-red-700 text-white font-bold py-1 px-2 uppercase rounded-full">Eliminar</button>
                    </div>
                </form>
            </div>
        </div>
        @else
        <div class="max-w-screen-lg bg-white mx-auto rounded-lg text-center py-11 mt-4">
            <h5 class="text-2xl leading-9 font-bold tracking-tight text-gray-800 sm:text-2xl sm:leading-10">
                No se han encontrado listas.
            </h5>
        </div>
        <img class='gif-logo object-cover mx-auto h-48 w-96' src="{{ asset('storage/nothing-logo.gif') }}" alt="nothing">
        @endif

        <div class='flex flex-wrap justify-center mt-14'>
            {{$lists->links()}}
        </div>


@endsection

