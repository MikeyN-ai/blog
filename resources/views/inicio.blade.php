@extends('plantilla')

@section('titulo', 'Inicio')
@section('contenido')
    <h1 class="pl-4 pb-4">Página de inicio</h1>
    @if(auth()->check())
        <h3 class="px-4 pb-4">Bienvenido, {{ auth()->user()->login }}!</h3>
    @endif
    <p class="px-4">Bienvenido al blog</p>
@endsection
