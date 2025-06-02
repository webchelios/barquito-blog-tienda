<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('admin-title') | Barquito</title>
    <link rel="stylesheet" href="{{ url('css/admin.css') }}">
</head>
<body>
    <nav>
        <a href="{{ url('/') }}">Volver a Barquito</a>
    </nav>
    <main>

            @yield('admin-content')
 
    </main>
    <footer>Marcelo Anavia 2025</footer>
</body>
</html>