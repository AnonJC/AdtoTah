<?php

Route::group(
    [
        'middleware' => 'web',
        'domain' => 'www.' . \config('app.domain'),
        'namespace' => 'Modules\Site\Http\Controllers'
    ],
    function() {
        Route::view('/', 'site::index')->name('site.home');
        Route::view('about', 'site::about')->name('site.about');
        Route::view('contact', 'site::contact')->name('site.contact');
        Route::view('news', 'site::news')->name('site.news');
        Route::view('offers', 'site::offers')->name('site.offers');
    }
);
