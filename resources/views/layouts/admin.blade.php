<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="{{ url('css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ url('css/styles.css') }}">
</head>
<body>

    <nav id="nav" class="navbar navbar-expand-lg">
    <div class="container-fluid">
        <div id="logo"><img src="<?= url('img/barquito.png') ?>" alt="">
        <a class="navbar-brand" href="<?=url('/') ?>">barquito</a></div>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="{{ route('home') }}">Inicio</a>
            </li>
            <li class="nav-item">
                <a class="nav-link active" href="{{ route('blog') }}">Blog</a>
            </li>
            <li class="nav-item">
                <a class="nav-link active" href="{{ route('store.view') }}">Tienda</a>
            </li>
            <li class="nav-item">
                <a class="nav-link active" href="{{ route('we') }}">Nosotros</a>
            </li>

            <li class="nav-item">
                <a class="nav-link active" href="{{ route('admin') }}">Panel de administración</a>
            </li>

            @auth
            <li class="nav-item">
                <form action="{{ route('auth.process.logout') }}" method="POST">
                    @csrf
                    <button type="submit">Cerrar Sesión</button>
                </form>
            </li>
            @else
            <li class="nav-item">
                <a class="nav-link" href="{{ route('auth.process.login') }}">Iniciar Sesión</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('auth.process.register') }}">Registrarse</a>
            </li>
            @endauth
        </ul>
        </div>
    </div>
    </nav>
    <main class="container py-3">
        <?PHP // Flashea el resultado de la publicación de entrada ?>
        @if (\Session::has('status.message'))
        <p class="status-message"> <img src="{{url('img/exclamacion.png')}}" alt="Una imagen de alerta" id="status-alert"> {!! \Session::get('status.message') !!}</p>
        @endif
    @yield('content')
    </main>
    <footer class="footer">
        <p>Marcelo Anavia 2023</p>
    </footer>

    <script src="{{url('js/bootstrap.min.js')}}"></script>
    <script src="{{url('js/main.js')}}"></script>
</body>
</html>