<?PHP
use App\Models\Category;
use Illuminate\Database\Eloquent\Collection;
use App\Model\Entry;

/** @var \Illuminate\Support\ViewErrorBag $errors */
/** @var Entry $entry*/
/** @var Category|Collection */
?>


@extends('layouts.main')

@section('title', "Editar la entrada '" . $entry->title. "'")

@section('content')
    <h1>Editar la entrada</h1>

    <form action="{{ url('/blog/' . $entry->entry_id . '/editar') }}" method="post" enctype="multipart/form-data">
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
                value="{{old('title', $entry->title)}}"
            >
            @error('title')
                <div><p
                        id="error-title"
                        style="color: red"
                    >{{ $message }}</p></div>
            @enderror
        </div>

        <div>
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
            >{{old('text', $entry->text)}}</textarea>
            @error('text')
                <div><p
                        id="error-text"
                        style="color: red"
                    >{{ $message }}</p></div>
            @enderror
        </div>

        <div>
            <label for="author">Autor</label>
            <input
                type="text"
                id="author"
                name="author"
                class="form-control @error('author') is-invalid @enderror"
                @error('author')
                    aria-describedby="author-title"
                    aria-invalid="true"
                @enderror
                value="{{old('author', $entry->author)}}"
            >
            @error('author')
                <div><p
                        id="error-author"
                        style="color: red"
                    >{{ $message }}</p></div>
            @enderror
        </div>

        <div>
            <label for="category_id">Categoria</label>
            <select
                id="category_id"
                name="category_id"
                class="form-control @error('category_id') is-invalid @enderror"
                @error('category_id')
                    aria-describedby="category_id-title"
                    aria-invalid="true"
                @enderror
            >
                @foreach ($categories as $category)
                    <option
                        value="{{ $category->category_id }}"
                        @if (old('category_id', $entry->category_id) == $category->category_id) selected @endif
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

        <div>
            <label for="cover">Carátula</label>
            <input
                type="file"
                id="cover"
                name="cover"
                class="form-control"
            >
    
        </div>

        <div>   
            <label for="cover_description" class="form-label">Descripción de la carátula</label>
            <input
                type="text"
                name="cover_description"
                id="cover_description"
                class="form-control"
                value="{{ old('cover_description') }}"
            >
        </div>

        <fieldset>
            <legend>Tags</legend>
            @foreach ($tags as $tag)
                <label>
                    <input
                        type="checkbox"
                        name="tags[]"
                        value="{{$tag->tag_id}}"
                        @checked(in_array($tag->tag_id, old('tags', $entry->tags->pluck('tag_id')->all() )))
                    >
                    <span>{{$tag->name}}</span>
                </label>
            @endforeach

        </fieldset>

        <button class="boton-formulario" type="submit">Editar</button>
    </form>
@endsection