@extends('layout.template')

@section('title', 'View ' . $product->id)

@section('content')
    <a href="{{route('product.index')}}">
        Volver al inicio
    </a>
    <h1>Id producto: {{$product->id}}</h1>
    <p>{{$product->nombre}}</p>
@endsection

