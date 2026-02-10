

<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container-fluid">
        <a class="navbar-brand" href="#">Miguel</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarBlog" aria-controls="navbarBlog" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarBlog">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link pl-2 fw-bold" href="{{ route('inicio')}}">Inicio</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link pl-2 fw-bold" href="{{ route('posts.index')}}">Listado de posts</a>
                </li>

                @if(!auth()->check())
                    <li class="nav-item">
                        <a class="nav-link iniciar_sesion pl-2 fw-bold" href="{{ route('login') }}">Iniciar sesión</a>
                    </li>
                @else
                    <li class="nav-item">
                        <a class="nav-link cerrar_sesion pl-2 fw-bold" href="{{ route('logout') }}">Cerrar sesión</a>
                    </li>
                @endif
            </ul>
        </div>
    </div>
</nav>
