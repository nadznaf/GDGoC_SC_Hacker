<?php

use Illuminate\Support\Facades\Route;

Route::get('/shop', function () {
    return view('bandage.shop');
})->name('shop');





