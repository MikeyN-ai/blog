@extends('plantilla')

@section('titulo', 'Ficha post')
@section('contenido')
    <h1 class="pl-4">Ficha del post {{ $posts->id }}</h1>
    <p class="pl-4"><b>Titulo:</b> {{$posts->titulo}}</p>
    <p class="pl-4"><b>Texto:</b> {{$posts->text}}</p>
    <p class="pl-4"><b>Fecha de creación:</b> {{$posts->created_at}}</p>
@endsection
