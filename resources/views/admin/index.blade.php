<?php
/** @var \App\Models\Entry[]|\Illuminate\Database\Eloquent\Collection $entries */
?>
@section('title') Blog @endsection

@extends('layouts.main')
@section('content')
<div class="contenedor-admin">

    <div class="admin-header">
        <h1>Administrar entradas</h1>
        <p>Ver, editar y eliminar entradas creadas por los usuarios.</p>
        <a href=" {{ route('blog.form.create') }}">Publicar entrada</a>
    </div>
    <table class="table admin-table">
        <thead>
            <tr>
                <th>Acción</th>
                <th>Titulo</th>
                <th>Carátula</th>
                <th>Texto</th>
                <th>Categoria</th>
                <th>Tags</th>
            </tr>
        </thead>
        <tbody>
            <?PHP // Directiva de BLADE @foreach() @endforeach ?>
            @foreach ($entries as $entry)
            <tr>
                <td class="botones">
                    <a href="{{ route( 'blog.view' , ['id' => $entry->entry_id])}}">Ver</a>
                    <a href="{{  route( 'blog.form.edit' , ['id' => $entry->entry_id])}}">Editar</a>
                    <form action="{{ route( 'blog.process.delete' , ['id' => $entry->entry_id])}}" method="POST" class="eliminar-form">
                        @csrf
                        <button type="submit">Eliminar</button>
                    </form>
                    <div class="modal-ventana">
                        <div class="contenedor-modal">
                            <p>¿Desea eliminar esta entrada?</p>
                            <a class="cancelar">No</a>
                            <a class="modal-boton">Si</a>
                        </div>
                    </div>
                </td>
                <td><b>{{ $entry->title }}</b></td>
                <td>   
                    @if ($entry->cover !== null)
                        <img src="{{ asset('storage/' . $entry->cover) }}" alt="{{ $entry->cover_description }}">
                    @else
                        <img src="{{ url('img/blog-img.png') }}">
                    @endif
                </td>
                <td>{{ $entry->text }}</td>

                <?PHP // Hay una relación creada para category, va a buscar el registro relacionado e imprimirme la categoría que necesito (modelo category) ?>
                <td>{{ $entry->category->name }}</td>

                <td>
                    @foreach ($entry->tags as $tag)
                    <p>{{$tag->name}}</p>
                    @endforeach
                </td>
            </tr>    
            @endforeach

        </tbody>
    </table>
</div>
@endsection