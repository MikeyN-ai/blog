@extends('plantilla')

@section('titulo', 'Listado posts')
@section('contenido')
    <h1 class="pl-4 pb-4">Listado de posts</h1>
    <table border="1" class="ml-4">
        <tr>
            <th>Titulo de post</th>
            <th>Acciones</th>
        </tr>
        @forelse($posts as $post)
            <tr>
                <td class="p-2">{{ $post->titulo }}</td>
                <td class="p-2 d-flex align-items-center">
                    <a href="{{route('posts.show', $post)}}" class="btn btn-success">Ver</a>
                    <form class="p-2 m-0" action="{{ route('posts.destroy', $post) }}" method="POST">
                        @method('DELETE')
                        @csrf
                        <button class="btn btn-danger">Borrar</button>
                    </form>
                    <a href="{{route('posts.editarPrueba', $post)}}" class="btn btn-warning">Editar</a>
                </td>
            </tr>
        @empty
            <p class="pl-4">No hay posts para mostrar.</p>
        @endforelse
    </table>

    <a href="{{route('posts.nuevoPrueba')}}" class="btn btn-primary ml-4 mt-4">Añadir</a>

    <div class="d-flex justify-content-center mt-4">
        {{ $posts->links('pagination::bootstrap-5') }}
    </div>

@endsection
