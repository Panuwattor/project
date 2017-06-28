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
    return view('admin_template');
});

Route::get('/general', function () {
    return view('general');
});

Route::get('/top-nav', function () {
    return view('top-nav');
});

Route::get('/boxed', function () {
    return view('boxed');
});

Route::get('/fixed', function () {
    return view('fixed');
});

Route::get('/collapsed-sidebar', function () {
    return view('collapsed-sidebar');
});

Route::get('/layout', function () {
    return view('layout');
});

Route::get('/test', function () {
    return view('test');
});

Route::get('/widgets', function () {
    return view('widgets');
});

Route::get('/chartjs', function () {
    return view('chartjs');
});

Route::get('/flot', function () {
    return view('flot');
});

Route::get('/inline', function () {
    return view('inline');
});

Route::get('/morris', function () {
    return view('morris');
});
