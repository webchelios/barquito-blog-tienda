@extends('layouts.main')

@section('title', $entry->title)

@section('main-content')
<div><a href="{{ url('/blog/entradas') }}">Blog</a> / {{ $entry->title }}</div>
<article class="blog-container">
    <h1>{{ $entry->title }}</h1>
    <p>{{ $entry->content }}</p>
</article>
@endsection