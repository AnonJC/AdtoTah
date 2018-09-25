<?php

Route::group(['middleware' => 'web', 'domain' => 'member.'.\config('app.domain'), 'namespace' => 'Modules\Member\Http\Controllers'], function()
{
    Route::view('/', 'member::index')->name('member.home');
});
