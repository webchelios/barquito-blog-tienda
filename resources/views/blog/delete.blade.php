@extends('layouts.main')

@section('title', 'Eliminar la entrada')

@section('main-content')
<div><a href="{{ route('entries.index') }}">Blog</a> / {{ $entry->title }}</div>
<article class="blog-container">
    <h1>Confirmar eliminación de la entrada</h1>
    <p>¿Seguro querés eliminar la entrada?</p>
    <form action={{ route('entries.delete.process', ['id' => $entry->entry_id] ) }} method="POST" class="form-delete">
        @csrf
        <button type="submit">Confirmar Eliminación</button>
    </form>
</article>
@endsection