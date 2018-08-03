<?php

Route::get('/', function () {
    return view('home.index');
});

Route::view('/contact', 'pages.contact');
Route::view('/pricing', 'pages.pricing');


Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});
