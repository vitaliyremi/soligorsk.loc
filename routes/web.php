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
    return view('index');
});

Route::get('/news', function () {
    return view('news');
});

Route::get('/lodging', function () {
    return view('lodging'); //ночлег
});

Route::get('/sight', function () {
    return view('sight'); //достопримечательности
});

Route::get('/leisure', function () {
    return view('leisure'); //досуг
});

Route::get('/transport', function () {
    return view('transport');
});


Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});
