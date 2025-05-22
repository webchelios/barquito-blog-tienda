<?PHP
use App\Models\Category;
use Illuminate\Database\Eloquent\Collection;

/** @var \Illuminate\Support\ViewErrorBag $errors */
/** @var Category|Collection $categories */
?>

@extends('layouts.main')

@section('title', 'Publicar nueva entrada')

@section('content')
    <h1 class="mt-4 mb-4"> Publicar nueva entrada </h1>

    <form action="{{ url('/blog/nueva') }}" method="post" enctype="multipart/form-data">
        <!--Agrego el token-->
        @csrf
        <div>
            <label for="title">Título</label>
            <input
                type="text"
                id="title"
                name="title"
                class="form-control @error('title') is-invalid @enderror"
                @error('title')
                    aria-describedby="error-title"
                    aria-invalid="true"
                @enderror
                value="{{old('title')}}"
            >
            @error('title')
                <div><p
                        id="error-title"
                        style="color: red"
                    >{{ $message }}</p></div>
            @enderror
        </div>

        <div class="mt-2">
            <label for="text">Texto</label>
            <textarea
                name="text"
                id="text"
                cols="30"
                rows="10"
                class="form-control @error('text') is-invalid @enderror"
                @error('text')
                    aria-describedby="text-title"
                    aria-invalid="true"
                @enderror
            >{{old('text')}}</textarea>
            @error('text')
                <div><p
                        id="error-text"
                        style="color: red"
                    >{{ $message }}</p></div>
            @enderror
        </div>

        <div class="mt-2">
            <label for="category_id">Categoría</label>
            <select
                id="category_id"
                name="category_id"
                class="form-control @error('category_id') is-invalid @enderror"
                @error('category_id')
                    aria-describedby="category_id-title"
                    aria-invalid="true"
                @enderror
            > 
                <option value="">Seleccionar categoría</option>            
                @foreach ($categories as $category)
                    <option
                        value="{{ $category->category_id }}"
                        @if (old('category_id') == $category->category_id) selected @endif
                    >
                        {{ $category->name }}
                    </option>
                @endforeach
            </select>
            @error('category_id')
                <div><p 
                        id="error-category_id"
                        style="color: red"
                    >{{ $message }}</p></div>
            @enderror
        </div>

        <div class="mt-2">
            <label for="cover">Carátula</label>
            <input
                type="file"
                id="cover"
                name="cover"
                class="form-control"
            >
    
        </div>

        <div class="mt-2">   
            <label for="cover_description" >Descripción de la carátula</label>
            <input
                type="text"
                name="cover_description"
                id="cover_description"
                class="form-control"
                value="{{ old('cover_description') }}"
            >
        </div>

        <fieldset class="mt-2">
            <legend>Tags</legend>
            @foreach ($tags as $tag)
                <label>
                    <input
                        type="checkbox"
                        name="tags[]"
                        value="{{$tag->tag_id}}"
                        @checked(in_array($tag->tag_id, old('tags', [])))
                    >
                    <span>{{$tag->name}}</span>
                </label>
            @endforeach

        </fieldset>

        <button class="boton-formulario" type="submit">Crear</button>
    </form>
@endsection