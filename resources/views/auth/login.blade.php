@extends('layouts.main')

@section('title', 'Iniciar Sesión')

@section('content')
<h1>Ingresar a tu cuenta</h1>

<form action="{{ route('auth.process.login') }}" method="POST">
    @csrf
    <div>
        <label for="email">Tu email</label>
        <input type="text" name="email" id="email" value="{{ old('email') }}" class="form-control">
    </div>
    <div>
        <label for="password">Tu contraseña</label>
        <input type="password" name="password" id="password" class="form-control">
    </div>
    <button type="submit" class="boton-formulario">Ingresar</button>
</form>
@endsection