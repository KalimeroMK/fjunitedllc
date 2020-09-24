<?php

Route::feeds();
Route::get('sitemap', 'Controller@sitemap');
Route::get('/', 'HomeController@index');
Route::get('contact', 'ContactController@create')->name('contact');
Route::get('be_part_of_our_team', 'ContactController@createCarriers')->name('carriers');
Route::post('contact', 'ContactController@store')->name('contact.send');
Route::post('be_part_of_our_team', 'ContactController@storeCarrier')->name('carriers.send');


