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

Route::get('/', 'HomeController@index');
Route::get('/pis', function () {
    return view('menu.portfolio.portfolio-pis');
});
Route::get('/hiber-mobile', function () {
    return view('menu.portfolio.portfolio-hiber-mobile');
});
Route::get('/hiber-droner', function () {
    return view('menu.portfolio.portfolio-hiber-droner');
});
