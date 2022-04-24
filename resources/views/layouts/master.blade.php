<!doctype html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">


    {{--  Snippet  --}}
    <title>@yield('titulo')</title>
    <meta name="description" content="@yield('descripcion')">


    <meta name="author" content="Autovot">
    <meta name="keywords" content="@yield('keywords')">


    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="{!! asset('css/app.css') !!}">

</head>
<body>
@section('navbar')
    <nav class="w3-top">
        <section class="banner w3-bar w3-blue w3-card w3-left-align w3-large">
            @yield('page-selected')
            <a class="material-icons w3-bar-item w3-button w3-padding-large w3-hover-white w3-right md-27" href="#">shopping_cart</a>
            <a class="material-icons w3-bar-item w3-button w3-padding-large w3-hover-white w3-right md-27" href="#">account_circle</a>
            <label>
                <input class="test w3-input w3-border w3-bar-item w3-padding-large w3-right" style="height: 51px; background-image: url('{{ asset('img/search.svg')}}');" type="text">
            </label>
        </section>
    </nav>
@show

@section('header')

@show

<main>
    @yield('contenido')
</main>


@section('footer')
    <footer class="w3-container w3-grey w3-padding-64 w3-center w3-opacity">
        <p>Esta pagina es un concepto para un proyecto de clase, no sirve para nada mas</p>
        <p>Todos los derechos reservados para © 2012-2021 Cloud Imperium Rights LLC and Cloud Imperium Rights Ltd.</p>
        <p>CSS and Pattern Powered by <a href="https://www.w3schools.com/w3css/default.asp" target="_blank">w3.css</a></p>
    </footer>
@show
</body>
</html>
