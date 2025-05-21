<?php
/** @var \App\Models\Entry[]|\Illuminate\Database\Eloquent\Collection $entries */
?>
@section('title') Blog @endsection

@extends('layouts.main')
@section('content')
<div class="contenedor-admin">

    <div class="admin-header">
        <h1>Panel de administración</h1>
        <p>¿Qué desea administrar?</p>
    </div>
    <div class="admin-options">
        <a href="{{ route('admin.entries') }}">Administrar entradas</a>
        <a href="{{ route('admin.users') }}">Administrar usuarios</a>

    </div>
</div>
@endsection