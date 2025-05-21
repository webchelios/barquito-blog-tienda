@extends('layouts.main')

@section('title', 'Confirmación de cuenta premium')

@section('content')

<section>
    <h1>Se requiere una cuenta premium</h1>
    <p>Para poder ver el contenido de esta entrada: <b>{{$entry->title}}</b> se requiere una cuenta premium</p>
    <form action="{{ route('entries.ispremium-verification.form', ['id' => $entry->entry_id]) }}" method="post">
        @csrf
        <button class="boton-formulario" style="width: 16rem" type="submit">Tengo cuenta premium</button>
        <a class="boton-formulario" style="width: 16rem; background-color: rgb(124, 14, 14);" href="{{route('blog')}}">No tengo una cuenta premium</a>
    </form>
</section>

@endsection