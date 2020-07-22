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
 //Clear config cache:
 Route::get('/config-cache', function() {
    $exitCode = Artisan::call('config:cache');
    return 'Config cache cleared';
}); 

// Clear application cache:
Route::get('/clear-cache', function() {
    $exitCode = Artisan::call('cache:clear');
    return 'Application cache cleared';
});
Route::get('/', 'HomeController@index');
Route::get('/download_cv', 'HomeController@downloadCv');
Route::post('/send-email', 'HomeController@sendEmail');


Route::get('/vuenic-backend', function () {
    return view('menu.portfolio.vuenic-backend');
});


Route::get('/vuenic-db', function () {
    return view('menu.portfolio.vuenic-db');
});

Route::get('/bpn-backend', function () {
    return view('menu.portfolio.bpn-backend');
});

Route::get('/bpn-db', function () {
    return view('menu.portfolio.bpn-db');
});

Route::get('/bpn-admin', function () {
    return view('menu.portfolio.bpn-admin');
});

Route::get('/bpn-mobile', function () {
    return view('menu.portfolio.bpn-mobile');
});

Route::get('/kemitraan-db', function () {
    return view('menu.portfolio.kemitraan-db');
});

Route::get('/kemitraan-web', function () {
    return view('menu.portfolio.kemitraan-web');
});

Route::get('/walhi-db', function () {
    return view('menu.portfolio.walhi-db');
});

Route::get('/walhi-backend', function () {
    return view('menu.portfolio.walhi-backend');
});

Route::get('/walhi-mobile', function () {
    return view('menu.portfolio.walhi-mobile');
});

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
Route::get('/complain-api', function () {
    return view('menu.portfolio.complain-api');
});


