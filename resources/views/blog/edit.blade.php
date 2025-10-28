<?php
    use App\Models\Entry;
?>

@extends('layouts.main')

@section('title', 'Editar entrada')

@section('main-content')

<div>
    <a href="{{ url('blog/entradas') }}">Blog</a> / <a href="{{ url('blog/entradas/' . $entry->entry_id) }}">{{ $entry->title }}</a> / <a>Editar entrada</a>
</div>

<h1>Editar entrada</h1>

@if ($errors->any())
    <div style="color:red;">Hay errores que revisar.</div>
@endif

<div class="form-container">
    <div>Previsualización de la portada</div>
    <form class="blog-form" action="{{ url('/blog/entradas/' . $entry->entry_id . '/editar') }}" method="post">
        <!--
            Token csrf (cross-site request forgeries) es requerido por laravel
        -->
        @csrf
        <div>
            <label for="title">Titulo</label>
            <input
                type="text"
                id="title"
                name="title"
                class="@error('title') is-invalid @enderror"
                value="{{ old('title', $entry->title) }}"
                @error('title')
                aria-describedby="error-title"
                aria-invalid=true
                @enderror
            >
            @error('title')
                <p style="color:red;" id="error-title">{{$message}}</p>
            @enderror
        </div>
        <div>
            <label for="content">Contenido</label>
            <textarea
                id="content"
                name="content"
                class="@error('content') is-invalid @enderror"
                @error('content')
                aria-describedby="error-message"
                aria-invalid=true
                @enderror
            >{{ old('content', $entry->content) }}</textarea>
            @error('content')
                <p style="color:red;" id="error-message">{{$message}}</p>
            @enderror
        </div>
        <div>
            <label for="category">Categoría</label>
            <input
                type="text"
                id="category"
                name="category"
                class="@error('category') is-invalid @enderror"
                value="{{ old('category', $entry->category) }}"
                @error('category')
                aria-describedby="error-category"
                aria-invalid=true
                @enderror
            >
            @error('category')
                <p style="color:red;" id="error-category">{{$message}}</p>
            @enderror
        </div>
        <div>
            <label for="author">Autor</label>
            <input
                type="text"
                id="author"
                name="author"
                class="@error('author') is-invalid @enderror"
                value="{{ old('author', $entry->author) }}"
                @error('author')
                aria-describedby="error-author"
                aria-invalid=true
                @enderror
            >
            @error('author')
                <p style="color:red;" id="error-author">{{$message}}</p>
            @enderror
        </div>
        <div>
            <label for="cover">Portada</label>
            <input
                type="text"
                id="cover"
                name="cover"
                class="@error('cover') is-invalid @enderror"
                value="{{ old('cover', $entry->cover) }}"
                @error('cover')
                aria-describedby="error-cover"
                aria-invalid=true
                @enderror
            >
            @error('cover')
                <p style="color:red;" id="error-cover">{{$message}}</p>
            @enderror
        </div>
        <button type="submit">Crear</button>
    </form>
</div>
@endsection