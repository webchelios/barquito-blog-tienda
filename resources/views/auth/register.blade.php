@extends('layouts.main')

@section('title', 'Registrarse')

@section('content')
<h1>Crea una cuenta</h1>

<form action="{{ route('auth.process.register') }}" method="POST">
    @csrf
    <div>
        <label for="name">Tu nombre</label>
        <input type="text" name="name" id="name" class="form-control">
    </div>
    <div>
        <label for="email">Tu email</label>
        <input type="text" name="email" id="email" class="form-control">
    </div>
    <div>
        <label for="password">Tu contraseña</label>
        <input type="password" name="password" id="password" class="form-control">
    </div>
    <button type="submit" class="boton-formulario">Registrarse</button>
</form>
@endsection