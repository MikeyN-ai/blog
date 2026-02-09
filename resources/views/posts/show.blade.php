@extends('plantilla')

@section('titulo', 'Ficha post')
@section('contenido')
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <h1 class="px-4 mb-4">Ficha del post {{ $posts->id }}</h1>
                <div class="card mb-3 mx-4 shadow">
                    <div class="card-body">
                        <p class="card-text"><b>Titulo:</b> {{$posts->titulo}}</p>
                        <p class="card-text"><b>Texto:</b> {{$posts->text}}</p>
                        <p class="card-text"><b>Fecha de creación:</b> {{$posts->created_at}}</p>
                        <a href="{{route('posts.index')}}" class="btn btn-primary">Volver</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
