@extends('plantilla')


@section('titulo', 'Login')


@section('contenido')

    <div class="container-fluid px-4">
        <div class="row">
            <div class="col-12">
                <h1 class="mb-3">Login</h1>

                @if (!empty($error))
                    <div class="alert alert-danger" role="alert">
                        <i class="bi bi-exclamation-triangle-fill me-2"></i>{{ $error }}
                    </div>
                @endif

                <form action="{{ route('login') }}" method="POST">
                    @csrf

                    <div class="form-group">
                        <label for="login">Login:</label>
                        <input type="text" class="form-control"
                        name="login" id="login" />
                    </div>


                    <div class="form-group">
                        <label for="password">Password:</label>
                        <input type="password" class="form-control"
                        name="password" id="password" />
                    </div>


                    <input type="submit" name="enviar" value="Enviar"
                    class="btn btn-dark btn-block">
                </form>
            </div>
        </div>
    </div>
@endsection
