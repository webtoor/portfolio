<?php
 //Clear route cache:
 Route::get('/route-cache', function() {
    $exitCode = Artisan::call('route:cache');
    return 'Routes cache cleared';
});

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

// Clear view cache:
Route::get('/view-clear', function() {
    $exitCode = Artisan::call('view:clear');
    return 'View cache cleared';
});

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
Route::get('/download_cv', 'HomeController@downloadCv');
Route::post('/send-email', 'HomeController@sendEmail');

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


