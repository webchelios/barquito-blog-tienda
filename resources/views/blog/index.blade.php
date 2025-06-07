@extends('layouts.main')

@section('title', 'Blog')

@section('main-content')
<section class="blog-container">
    <h1>Entradas</h1>
    <div>
        <a href="{{ url('/blog/entradas/nueva') }}">Crear una</a>
    </div>
    <div class="card-container"> 

        @foreach ( $entries as $entry )
        <article class="blog-card"> 
            <h2>{{ $entry->title }}</h2>
            <p>Por: {{ $entry->author }}</p>
            <p><b>{{ $entry->category }}</b></p>
            <p>{{ $entry->content }}</p>
            <div>
                <a href="{{ url('/blog/entradas/' . $entry->entry_id) }}">Ver bien</a>
            </div>
        </article>
        @endforeach

    </div>
</section>
@endsection