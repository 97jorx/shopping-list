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
            <div class="mt-10 border-2 w-96 sm:w-68 md:w-96 lg:w-132 h-full rounded-2xl border-gray-400 overflow-hidden">
                <form action="{{ route('lists.delete') }}" method="POST" >
                    @csrf
                    @method('DELETE')
                    @foreach ($lists as $key => $list)
                        <div class="hover:bg-gray-200 border-b-2 border-gray-500 cursor">
                                <div class="cursor-pointer flex items-center h-24 pl-5">
                                    <input class="h-4 w-4 rounded-full shadow" id="checkbox{{$key}}" name="checkbox[]" value="{{$list->id}}" type="checkbox"/>
                                    <span class="basis-4/5 font-bold pl-8">{{$list->nombre}}</span>
                                    <a class="cursor-pointer bg-blue-400 hover:bg-blue-700 text-white font-bold py-1 px-2 rounded-full"
                                         type="button" 
                                         id="button-modal"
                                         data-modal-toggle="extralarge-modal"
                                         data-id="{{ $list->id }}"
                                         {{-- data-attr="{{ route('productlist.edit', $productlist->id) }}" --}}
                                    >
                                    <i class="fa fa-wrench" aria-hidden="true"></i>
                                    </a>
                                </div>
                        </div>
                    @endforeach
                    <div id="footer-list" class="flex justify-center mt-5 mb-5 px-5 space-x-10 uppercase">
                        <div class="basis-2/4 text-xs break-normal whitespace-nowrap ">
                            <button class="cursor-pointer bg-red-500 hover:bg-red-700 text-white font-bold py-1 px-3 uppercase rounded-full" type="submit" >Eliminar</button>
                            <a class="cursor-pointer bg-blue-500 hover:bg-blue-700 text-white font-bold py-1 px-2 rounded-full break-normal">Marcar todas</a>
                        </div>
                        <div>Mostrando {{count($lists)}} elementos</div>
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
        <div class='flex flex-wrap justify-center m-10'>
            {{$lists->links()}}
        </div>
        @include('modals/modal')
@endsection

