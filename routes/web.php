<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('front.pages.index');
});
