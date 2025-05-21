@extends('layouts.main')

@section('title', $entry->title)

@section('content')
<div class="contenedor-view">
    <a href="{{ route('blog') }}">Volver</a>
    <p><div class="category"></div>{{ $entry->category->name }}</p>
    <h2> {{ $entry->title }} </h2>
    <p> Autor: {{ $entry->author }}</p>
    <p> {{ $entry->text }}</p>

    @if ($entry->cover !== null)
        <div class="view-img"><img src="{{ asset('storage/' . $entry->cover) }}" alt="{{ $entry->cover_description }}"></div>
    @else
        <div class="view-img"><img src="{{ url('img/blog-img.png') }}"></div>
    @endif

    @if($entry->tags->isNotEmpty())
        @foreach ($entry->tags as $tag)
            <p>{{$tag->name}}</p>
        @endforeach
    @else
        <span>No tiene tags</span>
    @endif
</div>
@endsection