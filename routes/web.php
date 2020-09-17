<?php

Route::feeds();
Route::get('sitemap', 'Controller@sitemap');
Route::get('/', 'HomeController@index');
Route::get('contact', 'ContactController@contact')->name('contact');
Route::post('contact', 'ContactController@create')->name('contact.send');

