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
    $name = 'João';
    return view('hello', compact('name'));
});

Route::get('/dbz', function () {
    $energy = 9000;
    return view('dbz', compact('energy'));
});

Route::get('/clients', function () {
    $names = ['Marcos', 'Alexandre', 'William', 'Bruna', 'Mirian', 'Janaina'];
    return view('clients', compact('names'));
});
