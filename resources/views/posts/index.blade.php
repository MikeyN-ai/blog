@extends('plantilla')

@section('titulo', 'Listado posts')
@section('contenido')
    <h1 class="pl-4 pb-4">Listado de posts</h1>

        @forelse($posts as $post)

            <div class="card mb-3 mx-4 shadow">
                <div class="row g-0">
                    <div class="col-12 col-xl-8">
                        <div class="card-body">
                            <p class="card-text">{{ $post->titulo }} ({{ $post->usuario->login }})</p>
                        </div>
                    </div>
                    <div class="col-12 col-xl-4">
                        <div class="card-body d-flex align-items-center justify-content-end">
                            <a href="{{route('posts.show', $post)}}" class="btn btn-success">Ver</a>

                            @if(auth()->check() && (auth()->user()->id === $post->usuario_id || auth()->user()->rol === "admin"))
                                <form class="p-2 m-0" action="{{ route('posts.destroy', $post) }}" method="POST">
                                    @method('DELETE')
                                    @csrf
                                    <button class="btn btn-danger" onclick="return confirm('¿Estás seguro de que quieres borrar este post?');">Borrar</button>
                                </form>
                            @endif
                            @if(auth()->check() && (auth()->user()->id === $post->usuario_id || auth()->user()->rol === "admin"))
                                <a href="{{route('posts.edit', $post)}}" class="btn btn-warning">Editar</a>
                            @endif
                        </div>
                    </div>
                </div>
            </div>

        @empty
            <p class="pl-4">No hay posts para mostrar.</p>
        @endforelse
    </table>

    <a href="{{route('posts.create')}}" class="btn btn-primary ml-4 mt-4">Añadir</a>

    <div class="d-flex justify-content-center mt-4">
        {{ $posts->links('pagination::bootstrap-5') }}
    </div>

@endsection
