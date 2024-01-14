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
    $nombre = "Nacho";
    return view('inicio')->with('nombre', $nombre);
})->name('inicio');

Route::get('listado', function() {
    $libros = array(
    array("titulo" => "El juego de Ender",
    "autor" => "Orson Scott Card"),
    array("titulo" => "La tabla de Flandes",
    "autor" => "Arturo Pérez Reverte"),
    array("titulo" => "La historia interminable",
    "autor" => "Michael Ende"),
    array("titulo" => "El Señor de los Anillos",
    "autor" => "J.R.R. Tolkien")
    );
    return view('libros.listado', compact('libros'));
})->name('listado_libros');