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
    return view('menu.portfolio.pis');
});
Route::get('/hiber-mobile', function () {
    return view('menu.portfolio.hiber-mobile');
});
Route::get('/hiber-droner', function () {
    return view('menu.portfolio.hiber-droner');
});

Route::get('/drupadi', function () {
    return view('menu.portfolio.drupadi');
});
Route::get('/petakwedding', function () {
    return view('menu.portfolio.petakwedding');
});
Route::get('/hiber-api', function () {
    return view('menu.portfolio.hiber-api');
});
Route::get('/db_complain', function () {
    return view('menu.portfolio.db_complain');
});

