<?php

Route::group(['middleware' => 'web', 'domain' => 'lgu.'.\config('app.domain'), 'namespace' => 'Modules\LGU\Http\Controllers'], function()
{
    Route::view('/', 'lgu::index')->name('lgu.home');
    Route::view('tourist-spots', 'lgu::spots')->name('lgu.spots');
    Route::view('restaurants', 'lgu::restos')->name('lgu.restos');
});
