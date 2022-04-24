@extends('layouts.master')
@section('titulo', $titulo)
@section('descripcion', $descripcion)
@section('keywords', $keywords)

@section('page-selected')
    <a href="/" class="w3-bar-item w3-button w3-padding-large w3-hover-white">Home</a>
    <a href="/ships" class="w3-bar-item w3-button w3-padding-large w3-hover-white">Barcos</a>
    <a href="/paints" class="w3-bar-item w3-button w3-padding-large w3-white">Pinturas</a>
@stop

@section('header')
    <header class="w3-container w3-blue w3-center" style="padding:128px 16px; background: url('{{$banner}}');">
        <h1 class="w3-margin w3-jumbo">{{$titulo}}</h1>
    </header>
@stop
@section('contenido')
    <p>
        Working progress...
    </p>
@stop
