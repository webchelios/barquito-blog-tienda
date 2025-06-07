@extends('layouts.main')

@section('title', 'Crear una nueva entrada')

@section('main-content')
<h1>Publicar una nueva entrada</h1>
<div>
    <a href="{{ url('blog/entradas') }}">Blog</a> / <a>Crear una nueva entrada</a>
</div>
<form action="{{ url('/blog/entradas/nueva') }}" method="post">
    <!--
        Token csrf (cross-site request forgeries) es requerido por laravel
    -->
    @csrf
    <div>
        <label for="title">Titulo</label>
        <input type="text" id="title" name="title">
    </div>
    <div>
        <label for="content">Contenido</label>
        <textarea id="content" name="content"></textarea>
    </div>
    <div>
        <label for="category">Categoría</label>
        <input type="text" id="category" name="category">
    </div>
    <div>
        <label for="author">Autor</label>
        <input type="text" id="author" name="author">
    </div>
    <div>
        <label for="cover">Portada</label>
        <input type="text" id="cover" name="cover">
    </div>
    <button type="submit">Crear</button>
</form>
@endsection