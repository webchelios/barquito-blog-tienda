@extends('layouts.main')

@section('title', 'Registrarse')

@section('content')
<h1 class="auth-titulo">Crea una cuenta</h1>

<form action="{{ route('auth.process.register') }}" method="POST">
    @csrf
    <div class="mt-2">
        <label for="name">Nombre</label>
        <input type="text" name="name" id="name" class="form-control" placeholder="Juan Perez">
    </div>
    <div class="mt-2">
        <label for="email">Email</label>
        <input type="text" name="email" id="email" class="form-control" placeholder="juan@example.com">
    </div>
    <div class="mt-2">
        <label for="password">Contraseña</label>
        <input type="password" name="password" id="password" class="form-control">
    </div>
    <button type="submit" class="boton-formulario">Registrarse</button>
</form>
@endsection