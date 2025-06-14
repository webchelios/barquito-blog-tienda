<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title') | Barquito</title>
    <link rel="stylesheet" href="{{ url('css/styles.css') }}">
</head>
<body>
    <nav class="navbar">

        <a href="{{ url('/') }}" class="logo">
            <img src="{{ url('img/icons/logo.svg') }}" alt="logo de barquito tienda y blog" width="300px">
        </a>

        <ul class="navbar-list">
            <li><a href="{{ url('/') }}" class="navbar-item">Inicio</a></li>
            <li><a href="{{ url('/blog/entradas') }}" class="navbar-item">Blog</a></li>
            <li><a href="{{ url('/quienes-somos') }}" class="navbar-item">Quienes somos</a></li>
            <li><a href="{{ url('/admin') }}" class="navbar-item">Administrar</a></li>
        </ul>

        <div class="menu-toggle">
            <div></div>
            <div></div>
            <div></div>
        </div>

    </nav>
    <main class="main-content">

            @yield('main-content')
 
    </main>
    <footer>Marcelo Anavia 23.2 | DWN4BV</footer>
    <script src="{{ url('js/main.js') }}"></script>
</body>
</html>