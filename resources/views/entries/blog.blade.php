<?php
/** @var \App\Models\Entry[]|\Illuminate\Database\Eloquent\Collection $entries */
?>
@section('title') Blog @endsection

@extends('layouts.main')
@section('content')
<div class="contenedor-blog">


    <section>
    <h1>Origami Blog</h1>
    <p>Explorá y publicá entradas</p>
    <div>
        <a href=" {{ route('blog.form.create') }}">Publicar entrada</a>
    </div>
    </section>

    <div class="contenedor-entradas">

    <?PHP // Directiva de BLADE @foreach() @endforeach ?>
    @foreach ($entries as $entry)
    <article>
            
        <h2>{{ $entry->title }}</h2>
        <p class="texto-blog">{{ $entry->text }}</p>
        @if ($entry->cover !== null)
            <img src="{{ asset('storage/' . $entry->cover) }}" alt="{{ $entry->cover_description }}">
        @else
            <img src="{{ url('img/blog-img.png') }}">
        @endif
        <?PHP // Hay una relación creada para category, va a buscar el registro relacionado e imprimirme la categoría que necesito (modelo category) ?>
        <p class="categoria-item">{{ $entry->category->name }}</p>

        @if($entry->tags->isNotEmpty())
            @foreach ($entry->tags as $tag)
                <p class="tag-item">{{$tag->name}}</p>
            @endforeach
        @else
            <span>No tiene tags</span>
        @endif
        
        <a href="{{ route( 'blog.view' , ['id' => $entry->entry_id])}}">Ver</a>
    </article>
   

@endforeach
</div>
</div>
@endsection