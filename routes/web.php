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
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::resources([
    'especie' => 'EspecieController',
    'nome-popular' => 'NomePopularController',
    'uso' => 'UsoController',
    'marcador' => 'MarcadorController',
    'galeria' => 'GaleriaController'
]);

// clados

Route::resources([
    'reino' => 'Cladograma\ReinoController',
    'filo' => 'Cladograma\FiloController',
    'classe' => 'Cladograma\ClasseController',
    'ordem' => 'Cladograma\OrdemController',
    'familia' => 'Cladograma\FamiliaController',
    'genero' => 'Cladograma\GeneroController',
    'divisao' => 'Cladograma\DivisaoController',
    'subclasse' => 'Cladograma\SubClasseController',
    'subfamilia' => 'Cladograma\SubFamiliaController'
]);