<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/cliente', function () {
    $numero = 1;
    return view('cliente',['numero' => $numero]);

});

Route::get('/cliente', function () {
    $nome = "Admin";
    $numero = 1;
    $codigo = 12;
    $lanches = ["X-Salada","X-Bacon","X-Tudo"];
    return view('/cliente',[
    'nome' => $nome,
    'numero' => $numero,
    'codigo' => $codigo,
    'lanches' => $lanches]);
});