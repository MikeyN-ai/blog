@extends('plantilla')

@section('titulo', 'Nuevo post')

@section('contenido')

    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <h1 class="pb-4">Nuevo Post</h1>
                <form action="{{ route('posts.store') }}" method="POST">
                    @csrf

                    <div class="form-group">
                        <label for="titulo">Título:</label>
                        <input type="text" class="form-control" name="titulo" id="titulo" value="{{ old('titulo') }}">

                        @if ($errors->has('titulo'))
                            <p class="text-danger mb-2">
                                {{ $errors->first('titulo') }}
                            </p>
                        @endif
                    </div>

                    <div class="form-group">
                        <label for="text">Comentario:</label>
                        <input type="text" class="form-control" name="text" id="text" value="{{ old('text') }}">
                        @if ($errors->has('text'))
                            <p class="text-danger mb-2">
                                {{ $errors->first('text') }}
                            </p>
                        @endif
                    </div>

                    <input type="submit" name="enviar" value="Enviar"
                    class="btn btn-dark btn-block">
                </form>
            </div>
        </div>
    </div>
@endsection
