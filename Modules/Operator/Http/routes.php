<?php

Route::group(['middleware' => 'web', 'domain' => 'operator.' . \config('app.domain'), 'namespace' => 'Modules\Operator\Http\Controllers'], function()
{
    Route::view('/', 'operator::index')->name('operator.home');
});
