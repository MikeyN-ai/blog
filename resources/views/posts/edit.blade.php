@extends('plantilla')

@section('titulo', 'Edición de post')

@section('contenido')

    <div class="container-fluid px-4">
        <div class="row">
            <div class="col-12">
                @if (auth()->check() && (auth()->user()->id !== $post->usuario_id))
                <div class="mx-2">
                    <div class="alert alert-danger" role="alert">
                        No tienes permisos para realizar esta acción
                    </div>
                    <a href="{{route('posts.index')}}" class="btn btn-primary">Volver</a>
                </div>
                @else
                    <h1 class="pb-4">Edición de Post</h1>
                    <form action="{{ route('posts.update', $post->id) }}" method="POST">
                        @csrf
                        @method('PUT')

                        <div class="form-group">
                            <label for="titulo">Título:</label>
                            <input type="text" class="form-control" name="titulo" id="titulo" value="{{ old('titulo', $post->titulo) }}">

                            @if ($errors->has('titulo'))
                                <p class="text-danger mb-2">
                                    {{ $errors->first('titulo') }}
                                </p>
                            @endif
                        </div>

                        <div class="form-group">
                            <label for="text">Comentario:</label>
                            <input type="text" class="form-control" name="text" id="text" value="{{ old('text', $post->text) }}">
                            @if ($errors->has('text'))
                                <p class="text-danger mb-2">
                                    {{ $errors->first('text') }}
                                </p>
                            @endif
                        </div>

                        <input type="submit" name="enviar" value="Enviar"
                        class="btn btn-dark btn-block">
                    </form>
                @endif
            </div>
        </div>
    </div>
@endsection

