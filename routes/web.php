<?php

Route::get('/', 'PageController@index')->name('home.index');
Route::get('/contact', 'PageController@contact')->name('pages.contact');
Route::get('/pricing', 'PageController@pricing')->name('pages.pricing');
Route::get('/pricing/groups', 'PageController@groups')->name('pages.pricing.groups');
Route::get('/news', 'PostController@index')->name('blog.index');
Route::get('/news/{post}', 'PostController@show')->name('blog.post');


Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});
