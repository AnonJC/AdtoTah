<?php

Route::group(['middleware' => 'web', 'domain' => 'lgu.'.\config('app.domain'), 'namespace' => 'Modules\LGU\Http\Controllers'], function()
{
    Route::view('/', 'lgu::index')->name('lgu.home');
});
