<?php

Route::group(['middleware' => 'web', 'domain' => 'supplier.' . \config('app.domain'), 'namespace' => 'Modules\Supplier\Http\Controllers'], function()
{
    Route::view('/', 'supplier::index')->name('supplier.home');
});
