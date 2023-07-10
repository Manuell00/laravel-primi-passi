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


// Creo la root iniziale
Route::get('/', function () {
    return view('welcome');
});

// Creo la root per lo user
Route::get('/user', function () {

    // Definiso la variabile del'user-name
    $name = 'Manuel';

    // Ritorno la view con i relativi dati che mi serviranno
    return view('user', compact('name'));
});


// Creo la root per 'chi siamo'
Route::get('/chi-siamo', function () {

    // Inserisco un array associativo
    $family = [
        'user1' => 'Manuel',
        'user2' => 'Massimo',
        'user3' => 'Massimo',
        'user4' => 'Carlotta',
    ];


    // Ritorno la view con i relativi dati che mi serviranno
    // Assegno il valore dell'array ala chiave family
    return view('chi-siamo', ['family' => $family]);
});
