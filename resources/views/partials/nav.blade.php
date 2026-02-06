

<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <a class="navbar-brand" href="#">Miguel</a>
    <ul class="navbar-nav justify-content-end w-100">
        <li class="nav-item">
          <a class="nav-link" href="{{ route('inicio')}}">Inicio</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{ route('posts.index')}}">Listado de posts</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Pricing</a>
        </li>

        @if(!auth()->check())
            <li class="nav-item">
                <a class="nav-link iniciar_sesion" href="{{ route('login') }}">Iniciar sesión</a>
            </li>
        @else
            <li class="nav-item">
                <a class="nav-link cerrar_sesion" href="{{ route('logout') }}">Cerrar sesión</a>
            </li>
        @endif
    </ul>
</nav>
