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
  $data = [
    'nome' => 'Francesco',
    'cognome' => 'Andreotti',
  ];
  return view('home', $data);
});

Route::get("/lista", function () {
  $data = [
    'lista_spesa' => [
      'Pasta',
      'Mele',
      'Hamburger',
      'Pane'
    ]
  ];
  return view("listaDellaSpesa", $data);
})->name("lista");
