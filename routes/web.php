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

// Route::get('/', function () {
//     return view('pages.dashboard');
// });

//Admin Data Mobil
Route::get('/dashboard', 'DataMobilController@index')->middleware('auth');
Route::get('/tambahdata', 'DataMobilController@create');
Route::post('/tambahdata/store', 'DataMobilController@store');
Route::get('/edit/{id}', 'DataMobilController@edit');
Route::put('/edit/upload/{id}', 'DataMobilController@upload');
Route::get('/deletedatamobil/{id}', 'DataMobilController@delete');

//Login Admin
Route::get('/login','AuthController@login')->name('login')->middleware('guest');
Route::get('/register','AuthController@register')->middleware('guest');
Route::post('register/post','AuthController@register_post')->middleware('guest');
Route::post('/login/post', 'AuthController@loginpost')->middleware('guest');
Route::get('/logout', 'AuthController@logout')->middleware('auth');

//Admin Pesanan
Route::get('/pesanan', 'PesananController@index');
Route::get('/deletepesanan/{id}', 'PesananController@delete2');


//Customer Pesan
Route::get('/pesan/{id}', 'PesananController@create');
Route::post('/pesan/store', 'PesananController@store');

Route::get('/mobil', 'DataMobilController@index2');

Route::get('/detail/{id}', 'DataMobilController@index3');

Route::get('/redirect', function(){
    return view('frontend.redirect');
});
Route::get('/aboutus', function(){
    return view('frontend.about-us');
});
Route::get('/home', function(){
    return view('frontend.home');
});