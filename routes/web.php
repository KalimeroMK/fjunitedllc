<?php

use UniSharp\LaravelFilemanager\Lfm;

Route::feeds();
Route::get('sitemap', 'Controller@sitemap');
Route::get('/', 'HomeController@index');
Route::group(['prefix' => 'laravel-filemanager', 'middleware' => ['web', 'auth']], function () {
    Lfm::routes();
});
