@extends('layouts.main')

@section('title', 'Inicio')

@section('main-content')
<section class="home-container">
    <div class="home-title">
        <h1>El hogar del origami</h1>
        <div class="home-flower">
            <div class="petal"></div>
            <div class="petal"></div>
            <div class="petal"></div>
        </div>
    </div>
    <div class="home-card">
        <div>
            <h2>Encontrá todo lo que buscás acerca del <span class="text-colorful">origami</span></h2>
            <p>Hacer origami ahora es mucho más fácil con nuestro blog. Navegá a través de nuestra colección de origamis, descubrí tutoriales y patrones, y sumergite en las historias detrás de cada creación. ¡El viaje comienza acá, donde el papel cobra vida y la creatividad no tiene límites!</p>
            <a href="" class="call-to-action">Unirse</a>
        </div>
        <div>
            <img src="{{ url('img/banner2.png') }}" alt="Imagen de grullas de origami sobre montañas de papel">
        </div>
    </div>

    <div class="home-card">
        <div>
            <img src="{{ url('img/home-presentation.png') }}" alt="Manos haciendo origamis">
        </div>
        <div>
            <h2>Compartí tus origamis con la <br><span class="text-colorful">comunidad</span></h2>
            <p>Visitá nuestro blog y publicá tu primer entrada. A los usuarios les encantará tu trabajo.</p>
            <a href="" class="call-to-action">Ir al blog</a>
        </div>
    </div> 

    <div class="home-card">
        <div>
            <h2>Comprá en nuestra <span class="text-colorful">tienda</span> los mejores <br>libros</h2>
            <p>Disponemos de los mejores libros. Desde principiantes a expertos disfrutarán de leer y aprender de los libros que tenemos en venta.</p>
            <a href="" class="call-to-action">Ver tienda</a>
        </div>
        <div>
            <img src="{{ url('img/store.jpg') }}" alt="Tienda de libros">
        </div>
    </div>
</section>
@endsection