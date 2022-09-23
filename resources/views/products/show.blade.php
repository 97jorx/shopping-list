@extends('layout.template')

@section('title', $product->nombre)

@section('content')
    <a href="{{ route('products.index') }}">
        Volver al inicio
    </a>
    <h1>Id producto: {{$product->id}}</h1>
    <p>{{$product->nombre}}</p>
@endsection

