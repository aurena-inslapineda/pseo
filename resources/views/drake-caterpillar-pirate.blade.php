@extends('layouts.master')
@section('titulo', $titulo)
@section('descripcion', $descripcion)
@section('keywords', $keywords)

@section('page-selected')
    <a href="/" class="w3-bar-item w3-button w3-padding-large w3-hover-white">Home</a>
    <a href="/ships" class="w3-bar-item w3-button w3-padding-large w3-white">Barcos</a>
    <a href="/paints" class="w3-bar-item w3-button w3-padding-large w3-hover-white">Pinturas</a>
@stop

@section('header')
    <header class="w3-container w3-blue w3-center" style="padding:128px 16px; background: url('{{$banner}}');">
        <h1 class="w3-margin w3-jumbo">{{$titulo}}</h1>
    </header>
@stop
@section('contenido')
    <section id="drake-caterpillar-pirate" class="w3-row-padding w3-padding-64 w3-container">
        <div class="w3-content">
            <article class="ship-buy w3-twothird">
                <h1>{{$titulo}}</h1>
                <p class="w3-padding-32">Nave de carga, se ha usado para robar algunas veces, esta bastante usada, las puertas estan un poco tocadas de llevar ballistas y merlins</p>
                <h5>295€</h5>
                <button class="w3-button w3-blue w3-padding-large w3-hover-blue-grey"><span class="material-icons">shopping_cart</span>Go to cart</button>
            </article>

            <aside class="w3-third w3-center">
                <img class="w3-padding-64 w3-text-blue" width="100%" src="{{asset('img/ships/DRAKE_caterpillar_pirate.jpg')}}" alt="{{@asset('img/ships/DRAKE_caterpillar_pirate.jpg')}}"/>
            </aside>

            <article class="ship-buy w3-twothird">
                <p>Video donde se muestra el exterior de la nave</p>
                <iframe width="560" height="315" src="https://www.youtube-nocookie.com/embed/nwrMJKtNFtE" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>

            </article>
        </div>
    </section>
@stop
