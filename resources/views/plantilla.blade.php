<html>
    <head>
        <title>
            @yield('titulo')
        </title>
        <link rel="stylesheet" type="text/css" href="{{ asset('/css/app.css') }}">
        <script type="text/javascript" src="{{ asset('/js/app.js') }}"></script>
    </head>
    <body>
        @include('partials.nav')
        <p class="text-right pr-2">{{ fechaActual() }}</p>
        @yield('contenido')
    </body>
</html>
