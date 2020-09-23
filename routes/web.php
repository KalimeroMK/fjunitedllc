<?php

Route::feeds();
Route::get('sitemap', 'Controller@sitemap');
Route::get('/', 'HomeController@index');
Route::get('contact', 'ContactController@create')->name('contact');
Route::get('carriers', 'ContactController@createCarriers')->name('carriers');
Route::post('contact', 'ContactController@store')->name('contact.send');
Route::post('carriers', 'ContactController@storeCarrier')->name('carriers.send');


