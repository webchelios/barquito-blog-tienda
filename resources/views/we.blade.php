@section('title') Nosotros @endsection

@extends('layouts.main')
@section('content')

<div class="nosotros-container">
    <section>
    <div class="nosotros-flex">    
        <div class="nosotros-contenido">
            <h1>Nosotros</h1>
            <p>Nuestro equipo está compuesto por apasionados plegadores de papel, diseñadores y educadores, todos comprometidos en brindarte inspiración, consejos y recursos para llevar tus habilidades de origami al siguiente nivel. ¡Estamos acá para guiarte en tu viaje, ya seas un principiante entusiasta o un plegador experimentado en busca de desafíos creativos!</p>
            <div class="redes">
                <a href="" id="facebook">Facebook</a>
                <a href="" id="instagram">Instagram</a>
                <a href="" id="whatsapp">Whatsapp</a>
            </div>
        </div>
        <div class="nosotros-img">
            <img src="{{ url('img/we.jpg') }}" alt="">
        </div>
    </div>


    </section>
</div>
@endsection