<?php
Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::middleware('auth')->group(function () {
    Route::get('/home', 'HomeController@index')->name('home');
    Route::post('/order', 'OrderController@store')->name('order.store');
    Route::post('/order/become-chef', 'OrderController@becomeChef')->name('order.becomeChef');
    Route::post('/order/{id}', 'OrderController@update')->name('order.update');

    Route::post('/portion/{id}', 'PortionController@update')->name('portion.update');
});

