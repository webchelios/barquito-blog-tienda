@extends('layouts.main')

@section('title', 'Iniciar Sesión')

@section('content')
<h1 class="auth-titulo">Ingresar a tu cuenta</h1>

<form action="{{ route('auth.process.login') }}" method="POST">
    @csrf
    <div class="mt-2">
        <label for="email">Email</label>
        <input type="text" name="email" id="email" value="{{ old('email') }}" class="form-control" placeholder="Juan@example.com">
    </div>
    <div class="mt-2">
        <label for="password">Contraseña</label>
        <input type="password" name="password" id="password" class="form-control">
    </div>
    <button type="submit" class="boton-formulario">Ingresar</button>
</form>
@endsection