<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;

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
    return view('welcome');
});

//Definienod las rutas que nos ayudaran con el restaurante
Route::get('/restaurante', function () {
    return view('restaurante');
});

//Rutas de los platillos
Route::get('/restaurante/Pupusas', function () {
    return view('pupusas');
})->name('Pupusas');;

Route::get('/restaurante/Tacos', function () {
    return view('tacos');
})->name('Tacos');;

Route::get('/restaurante/Pizza', function () {
    return view('pizza');
})->name('Pizza');;

Route::get('/restaurante/Tortas', function () {
    return view('tortas');
})->name('Tortas');

Route::get('/restaurante/PapasFritas', function () {
    return view('papas');
})->name('PapasFritas');


//Prueba para ver si funciona como con lo del id del usuario
Route::get('/restaurante/{platillo}', function ($platillo) {
    return view($platillo) . 'El platillo seleccionado es: '. $platillo;
});