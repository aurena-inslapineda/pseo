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
    <div class="flex-center">
        <article>
            <header><img class="flex-img" src="{{asset('img/ships/DRAKE_caterpillar_pirate.jpg')}}" alt="Drake Caterpillar Pirate"></header>
            <section>
                <h3>Drake Caterpillar Pirate</h3>
                <p>295€</p>
            </section>
            <footer>
                <a class="w3-button w3-blue-grey w3-padding-large w3-hover-blue" href="/ships/drake/caterpillar-pirate">MORE INFO</a>
                <button class="w3-button w3-blue w3-padding-large w3-hover-blue-grey"><span class="material-icons">add_shopping_cart</span>ADD TO CART</button>
            </footer>
        </article>
        <article>
            <header><img class="flex-img" src="{{asset('img/ships/AEGIS_gladius_pirate.jpg')}}" alt="Aegis Gladius Pirate"></header>
            <section>
                <h3>Aegis Gladius Pirate</h3>
                <p>110€</p>
            </section>
            <footer>
                <a class="w3-button w3-blue-grey w3-padding-large w3-hover-blue" href="/ships/drake/caterpillar-pirate">MORE INFO</a>
                <button class="w3-button w3-blue w3-padding-large w3-hover-blue-grey"><span class="material-icons">add_shopping_cart</span>ADD TO CART</button>
            </footer>
        </article>
        <article>
            <header><img class="flex-img" src="{{asset('img/ships/AEGIS_gladius.jpg')}}" alt="Aegis Gladius"></header>
            <section>
                <h3>Aegis Gladius</h3>
                <p>90€</p>
            </section>
            <footer>
                <a class="w3-button w3-blue-grey w3-padding-large w3-hover-blue" href="/ships/drake/caterpillar-pirate">MORE INFO</a>
                <button class="w3-button w3-blue w3-padding-large w3-hover-blue-grey"><span class="material-icons">add_shopping_cart</span>ADD TO CART</button>
            </footer>
        </article>
        <article>
            <header><img class="flex-img" src="{{asset('img/ships/CO_mustang_alpha.jpg')}}" alt="C.O. Mustang Alpha"></header>
            <section>
                <h3>C.O. Mustang Alpha</h3>
                <p>30€</p>
            </section>
            <footer>
                <a class="w3-button w3-blue-grey w3-padding-large w3-hover-blue" href="/ships/drake/caterpillar-pirate">MORE INFO</a>
                <button class="w3-button w3-blue w3-padding-large w3-hover-blue-grey"><span class="material-icons">add_shopping_cart</span>ADD TO CART</button>
            </footer>
        </article>
        <article>
            <header><img class="flex-img" src="{{asset('img/ships/CO_mustang_beta.jpg')}}" alt="C.O. Mustang Beta"></header>
            <section>
                <h3>C.O. Mustang Beta</h3>
                <p>40€</p>
            </section>
            <footer>
                <a class="w3-button w3-blue-grey w3-padding-large w3-hover-blue" href="/ships/drake/caterpillar-pirate">MORE INFO</a>
                <button class="w3-button w3-blue w3-padding-large w3-hover-blue-grey"><span class="material-icons">add_shopping_cart</span>ADD TO CART</button>
            </footer>
        </article>
        <article>
            <header><img class="flex-img" src="{{asset('img/ships/CO_mustang_gamma.jpg')}}" alt="C.O. Mustang Gamma"></header>
            <section>
                <h3>C.O. Mustang Gamma</h3>
                <p>55€</p>
            </section>
            <footer>
                <a class="w3-button w3-blue-grey w3-padding-large w3-hover-blue" href="/ships/drake/caterpillar-pirate">MORE INFO</a>
                <button class="w3-button w3-blue w3-padding-large w3-hover-blue-grey"><span class="material-icons">add_shopping_cart</span>ADD TO CART</button>
            </footer>
        </article>
        <article>
            <header><img class="flex-img" src="{{asset('img/ships/RSI_aurora_cl.jpeg')}}" alt="RSI Aurora CL"></header>
            <section>
                <h3>RSI Aurora CL</h3>
                <p>45€</p>
            </section>
            <footer>
                <a class="w3-button w3-blue-grey w3-padding-large w3-hover-blue" href="/ships/drake/caterpillar-pirate">MORE INFO</a>
                <button class="w3-button w3-blue w3-padding-large w3-hover-blue-grey"><span class="material-icons">add_shopping_cart</span>ADD TO CART</button>
            </footer>
        </article>
        <article>
            <header><img class="flex-img" src="{{asset('img/ships/RSI_aurora_es.jpeg')}}" alt="RSI Aurora ES"></header>
            <section>
                <h3>RSI Aurora ES</h3>
                <p>20€/p>
            </section>
            <footer>
                <a class="w3-button w3-blue-grey w3-padding-large w3-hover-blue" href="/ships/drake/caterpillar-pirate">MORE INFO</a>
                <button class="w3-button w3-blue w3-padding-large w3-hover-blue-grey"><span class="material-icons">add_shopping_cart</span>ADD TO CART</button>
            </footer>
        </article>
    </div>
@stop
