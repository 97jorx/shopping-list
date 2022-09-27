@extends('layout.template')

@section('title', 'Listas')

@section('content')

    <a href="{{ route('lists.create') }}" class="border-2 cursor-pointer rounded-2xl hover:border-lime-500 border-gray-400 font-bold py-4 px-4 rounded ">
        <i class="text-grey-300  fa fa-plus-circle" aria-hidden="true"></i>
        <span class='pl-3'>Crear lista</span>
    </a>

    @if ($lists->isNotEmpty())
        <div>
            <table class="mx-auto max-w-4xl w-full whitespace-nowrap rounded-lg bg-white divide-y divide-gray-800 overflow-hidden">
                <thead class="text-white bg-zinc-600">
                    <tr>
                        <th class="px-8 py-6 uppercase">
                            Listas de la compra
                        </th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-gray-200">
                    @foreach ($lists as $list)
                            <tr>
                                <td class="px-8 py-6 border border-slate-200">
                                    {{$list->nombre}}
                                </td>
                            </tr>
                    @endforeach
                </tbody>
            </table>
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

