@section('title') Inicio @endsection

@extends('layouts.main')
@section('content')

<div class="contenedor-home">
    <section class="first-home">
        <div class="contenido-home">
            <h2>Encontrá todo lo que buscas acerca del <span class="resaltar">origami</span></h2>
            <p>Hacer origami ahora es mucho más fácil con nuestro blog. Navegá a través de nuestra colección de origamis, descubrí tutoriales y patrones, y sumergite en las historias detrás de cada creación. ¡El viaje comienza acá, donde el papel cobra vida y la creatividad no tiene límites!</p>
            <a href="{{ route('blog') }}">Ir al blog</a>
        </div>
        <div><img src="{{ url('img/banner2.png') }}" alt=""></div>
    </section>

    <section class="second-home">
        <div class="comunidad">
            <div class="comunidad-contenido">
                <h2>Compartí tus origamis con la <span class="resaltar">comunidad</span></h2>
                <p>Visitá nuestro blog y publicá tu primer entrada. A los usuarios les encantará tu trabajo.</p>
                <a href="{{ route('blog') }}">Ir al blog</a>
            </div>
            <div>
        
                <img src="{{ url('img/home-presentation.png') }}" alt="">
            </div>
        </div>
    </section> 

    <section class="first-home">
        <div class="contenido-home">
            <h2>Comprá en nuestra <span class="resaltar">tienda</span> los mejores libros</h2>
            <p>Disponemos de los mejores libros. Desde principiantes a expertos disfrutarán de leer y aprender de los libros que tenemos en venta.</p>
            <a href="{{ route('store.view') }}">Ver tienda</a>
        </div>
        <div><img src="{{ url('img/store.jpg') }}" alt=""></div>
    </section>
</div>
@endsection