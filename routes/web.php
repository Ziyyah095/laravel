<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return 'Ini route utama';
});

Route::get('/cart', function () {
    return 'Ini halaman cart';
});
