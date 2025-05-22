@section('title') Tienda @endsection

@extends('layouts.main')
@section('content')

<section class="store">
<h1>La tienda</h1>
</section>

<div class="container-books">
    @foreach ($books as $book)
        <article>
            <div><img src="{{ $book->cover }}" alt="{{$book->cover_description}}"></div>
            <h2>{{ $book->title }}</h2>
            <p>{{ $book->description }}</p>
            <p class="display-4">${{ $book->price }}</p>

            <button class="boton-compra">Comprar</button>
        </article>
    @endforeach

</div>

{{ $books->links() }}

@endsection