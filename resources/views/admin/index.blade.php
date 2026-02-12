@extends('layouts.admin')

@section('admin-title', 'Panel de administración')

@section('admin-content')
<h1>PANEL DE ADMINISTRACIóN<h1>
<a href="{{ url('/admin/entradas') }}">Administrar entradas</a>
@endsection