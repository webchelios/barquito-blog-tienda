@extends('layouts.main')

@section('title', 'Blog')

@section('main-content')
<section class="blog-container">
    @if (\Session::has('status.message'))
        <div style="color:green;">{!! \Session::get('status.message') !!}</div>
    @endif
    <div class="title-container">
        <h1>Explorá nuestro Blog</h1>
        <div>
            <a
                href="{{ route('entries.create.form') }}"
                class=""
            >Crear una entrada</a>
        </div>
    </div>
    <div class="blog-columns">
        <div class="filters-container">
            <h2>Categoría</h2>
            <ul>
                <li>Filtro 1</li>
                <li>Filtro 2</li>
                <li>Filtro 3</li>
            </ul>
            <h2>Precio</h2>
            <ul>
                <li>Filtro 1</li>
                <li>Filtro 2</li>
                <li>Filtro 3</li>
            </ul>
        </div>
        <div class="card-container">

            @foreach ( $entries as $entry )
            <a
                href="{{ route('entries.view', ["id" => $entry->entry_id ]) }}"
                class="blog-link"
            >
                <article class="blog-card">
                    <div>
                        <img class="img-temp" src="https://img.freepik.com/vector-gratis/papel-pintado-ondulado-grafico-oscuro_23-2148388258.jpg?semt=ais_hybrid&w=740">
                    </div>
                    <div>
                        <p class="category-tag">{{ $entry->category->name }}</p>
                        <h2>{{ $entry->title }}</h2>
                        <p>{{ $entry->content }}</p>
                        @foreach($entry->tags as $tag)
                            <p>{{$tag->name}}</p>
                        @endforeach
                        @auth
                            <a href="{{ route('entries.delete.form', $entry->entry_id) }}">Eliminar</a>
                            <a href="{{ route('entries.edit.form', $entry->entry_id) }}">Editar</a>
                        @endauth
                        <div class="profile-container">
                            <img src="https://roast.dating/images/ben.webp">
                            <div>
                                <p>{{ $entry->author }}</p>
                                <p>Administrador</p>
                            </div>
                        </div>
                    </div>
                </article>
            </a>
            @endforeach

        </div>
    </div>
</section>
@endsection

