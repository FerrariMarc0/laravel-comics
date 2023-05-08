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
    $shop = config('db.shop');
    $dc = config('db.dc');
    $sites = config('db.sites');
    $footer_icons = config('db.footer_icons');
    return view('home', compact('magazines', 'menu', 'commerce_icons', 'dc_comics', 'shop', 'dc', 'sites', 'footer_icons'));
})->name('homepage');


Route::get('/prodotto/{index}', function ($index) {

    $total_magazines = config('db.magazines');
    $menu = config('db.menu');
    $dc_comics = config('db.dc_comics');
    $shop = config('db.shop');
    $dc = config('db.shop');
    $sites = config('db.sites');
    $footer_icons = config('db.footer_icons');

    if($index > count($total_magazines) -1){
        abort(404);
    }

    $magazines = $total_magazines[$index];

    return view('product', compact('menu', 'dc_comics', 'shop', 'dc', 'sites', 'magazines', 'footer_icons'));
})->name('product')->where('index', '[0-9]+');
