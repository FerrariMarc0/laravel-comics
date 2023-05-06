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

    $magazines = config('db.magazines');
    $menu = config('db.menu');
    $commerce_icons = config('db.commerce_icons');
    $dc_comics = config('db.dc_comics');

    return view('home', compact('magazines', 'menu', 'commerce_icons', 'dc_comics'));
})->name('homepage');


Route::get('/prodotto', function () {

        $menu = config('db.menu');
        $dc_comics = config('db.dc_comics');

    return view('product', compact('menu', 'dc_comics'));
})->name('product');
