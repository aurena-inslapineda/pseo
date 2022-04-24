<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('home', array(
        'titulo' => 'La chatarrería de Argovot',
        'descripcion' => 'Chatarreria espacial Argovot, se venden naves de segunda nave y capas de pintura.',
        'keywords' => 'home, index, page, spaceships, star citizen, argovot',
        'banner' => asset('img/banners/home.png'),
    ));
});

Route::get('/ships', function () {
    return view('ships', array(
        'titulo' => 'Naves de segunda mano',
        'descripcion' => 'Lista donde se muestran las naves de segunda mano de Argovot.',
        'keywords' => 'second hand, second hand ships, second hand ships argovot',
        'banner' => asset('img/banners/home.png'),
    ));
});

Route::get('/ships/drake/caterpillar-pirate', function () {
    return view('drake-caterpillar-pirate', array(
        'titulo' => 'Drake Caterpillar Pirate',
        'descripcion' => 'Drake caterpillar edicion pirate, nave de segunda mano.',
        'keywords' => 'second hand, second hand ships, second hand ships argovot, drake, caterpillar, pirate, argovot',
        'banner' => asset('img/banners/home.png'),
    ));
});


Route::get('/paints', function () {
    return view('paints', array(
        'titulo' => 'Capas de pintura',
        'descripcion' => 'Pinturas disponibles.',
        'keywords' => 'paints, capas, pinturas, argovot',
        'banner' => asset('img/banners/home.png'),
    ));
});
