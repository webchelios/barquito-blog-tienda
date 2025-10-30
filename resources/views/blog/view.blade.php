@extends('layouts.main')

@section('title', $entry->title)

@section('main-content')
<div><a href="{{ url('/blog/entradas') }}">Blog</a> / {{ $entry->title }}</div>
<article class="blog-container">
    <h1>{{ $entry->title }}</h1>
    <p>{{ $entry->content }}</p>
    <div>
        @if ($entry->cover !== null)
            <img src="{{ url('storage/' . $entry->cover) }}" alt="{{ $entry->cover_description }}">
        @else
            <p>No hay imagen</p>
        @endif

    </div>
</article>
@endsection