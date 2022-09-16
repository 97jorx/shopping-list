@extends('layout.template')

@section('title', $lists->nombre)

@section('content')
    <a href="{{ route('lists.index') }}">
        Volver al inicio
    </a>
    <h1>Id lista: {{$lists->id}}</h1>
    <p>{{$lists->nombre}}</p>
@endsection

