<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

Route::get('/add-pkmn', function () {
    return view('AddPokemon');
});