@extends('layouts.main')

@section('title', 'Eliminar la entrada')

@section('main-content')
<div><a href="{{ url('/blog/entradas') }}">Blog</a> / {{ $entry->title }}</div>
<article class="blog-container">
    <h1>Confirmar eliminación de la entrada</h1>
    <p>¿Seguro querés eliminar la entrada?</p>
    <form action={{ url('/blog/entradas/' . $entry->entry_id . '/eliminar') }} method="POST" class="form-delete">
        @csrf
        <button type="submit">Confirmar Eliminación</button>
    </form>
</article>
@endsection