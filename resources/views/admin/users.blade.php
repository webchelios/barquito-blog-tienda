<?php
/** @var \App\Models\Entry[]|\Illuminate\Database\Eloquent\Collection $entries */
?>
@section('title') Blog @endsection

@extends('layouts.main')
@section('content')
<div class="contenedor-admin">

    <div class="admin-header">
        <h1>Administrar usuarios</h1>
        <p>Manejo de usuarios autenticados y sus respectivas compras.</p>
    </div>

    <div class="user-container">

        @foreach ($users as $user)
        @if ($user->role !== 'admin')
        <article>
                
            <h2>{{ $user->name }}</h2>
           

            <p>{{ $user->email }}</p>
            
            
            @if($user->books->isNotEmpty())
            <h3>Libros comprados:</h3>
            @foreach ($user->books as $book)
            <p>{{$book->title}}</p>
            @endforeach
                @else
                    <span>No tiene libros comprados</span>
                    @endif
                    
                    
                    
                    <a href="">Compras</a>
                </article>
                
                @endif
                @endforeach
    </div>
                
</div>
@endsection