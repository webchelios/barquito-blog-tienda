<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Barquito</title>
    <link rel="stylesheet" href="{{ url('css/styles.css') }}">
</head>
<body>
    <nav>
        <a href="{{ url('/') }}">Inicio</a>
        <a href="{{ url('/quienes-somos') }}">Quienes somos</a>
        <a href="{{ url('/blog/entradas') }}">Blog</a>
    </nav>
    <main>

            @yield('main-content')
 
    </main>
    <footer>Marcelo Anavia 2025</footer>
</body>
</html>