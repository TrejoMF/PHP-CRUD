<?php

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
    return view('alumnos.main');
});

Route::get('/inicio', function () {
    return view('ejemplo.inicio');
});

Route::get('/perfil', function () {
    return view('ejemplo.perfil');
});

Route::get('/portafolio', function () {
    return view('ejemplo.portafolio');
});

Route::get('/contacto', function () {
    return view('ejemplo.contacto');
});

Route::resource('alumnos', 'AlumnoController');
