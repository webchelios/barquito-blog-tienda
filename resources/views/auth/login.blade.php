@extends('layouts.main')

@section('title', 'Iniciar sesión')

@section('main-content')
<h1>Ingresar a mi cuenta</h1>
<form action="{{ url('/iniciar-sesion') }}" method="post">
    @csrf
    <div>
        <label for="email">Email</label>
        <input type="email" id="email" name="email" autocomplete="off"/>
    </div>
    <div>
        <label for="password">Contraseña</label>
        <input type="password" id="password" name="password"/>
    </div>
    <button type="submit">Iniciar sesión</button>
</form>
@endsection