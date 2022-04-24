@extends('layouts.master')
@section('titulo', $titulo)
@section('descripcion', $descripcion)
@section('keywords', $keywords)

@section('page-selected')
    <a href="/" class="w3-bar-item w3-button w3-padding-large w3-white">Home</a>
    <a href="/ships" class="w3-bar-item w3-button w3-padding-large w3-hover-white">Barcos</a>
    <a href="/paints" class="w3-bar-item w3-button w3-padding-large w3-hover-white">Pinturas</a>
@stop

@section('header')
    <header class="w3-container w3-blue w3-center" style="padding:128px 16px; background: url('{{$banner}}');">
        <h1 class="w3-margin w3-jumbo">{{$titulo}}</h1>
    </header>
@stop
@section('contenido')
    <section id="info-ships" class="w3-row-padding w3-padding-64 w3-container">
        <div class="w3-content">
            <article class="w3-twothird">
                <h1>Varcos espaciales de segunda mano</h1>
                <h5 class="w3-padding-32">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</h5>

                <p class="w3-text-grey">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Excepteur sint
                    occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco
                    laboris nisi ut aliquip ex ea commodo consequat.</p>
            </article>

            <aside class="w3-third w3-center">
                <span class="material-icons w3-padding-64 w3-text-blue" style="font-size: 300px;">rocket_launch</span>
            </aside>
        </div>
    </section>

    <section id="info-paints" class="w3-row-padding w3-light-grey w3-padding-64 w3-container">
        <div class="w3-content">
            <aside class="w3-third w3-center">
                <span class="material-icons w3-padding-64 w3-text-blue" style="font-size: 300px;">format_color_fill</span>
            </aside>

            <article class="w3-twothird">
                <h1>Manos de pinturas</h1>
                <h5 class="w3-padding-32">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</h5>

                <p class="w3-text-grey">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Excepteur sint
                    occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco
                    laboris nisi ut aliquip ex ea commodo consequat.</p>
            </article>
        </div>
    </section>
@stop
