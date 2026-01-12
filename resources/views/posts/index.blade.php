@extends('plantilla')

@section('titulo', 'Listado posts')
@section('contenido')
    <h1 class="p-4">Listado de posts</h1>
    <table border="1" class="ml-4">
        <tr>
            <th>Titulo de post</th>
            <th>Acciones</th>
        </tr>
        @forelse($posts as $post)
            <tr>
                <td class="p-2">{{ $post->titulo }}</td>
                <td class="p-2"><a href="posts/{{ $post->id }}" class="btn btn-success">Ver</a></td>
            </tr>
        @empty
            <p class="pl-4">No hay posts para mostrar.</p>
        @endforelse
    </table>

    <div class="m-3">
        <p class="">{{ $posts->links() }}</p>
    </div>

@endsection
