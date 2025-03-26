<?php

use Illuminate\Support\Facades\Route;
use App\Models\Homestay;

Route::get('/homestay/{homestay}', function (Homestay $homestay) {
    return view('front.pages.detail', compact('homestay'));
})->name('homestay.detail');

Route::get('/', function () {
    return view('front.pages.index');
});
