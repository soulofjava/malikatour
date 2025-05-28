<?php

use Illuminate\Support\Facades\Route;
use App\Models\Homestay;
use App\Models\SiteSetting;
use App\Models\Tour;

Route::get('/tour/{tour}', function (Tour $tour) {
    return view('front.pages.tour', compact('tour'));
})->name('tour.detail');

Route::get('/homestay/{homestay}', function (Homestay $homestay) {
    return view('front.pages.detail', compact('homestay'));
})->name('homestay.detail');

Route::get('/', function () {
    $data = SiteSetting::first();
    return view('front.pages.index', [
        'data' => $data,
    ]);
});

Route::get('tentangkami', function () {
    $data = SiteSetting::first();
    return view('front.pages.tentang', [
        'data' => $data,
    ]);
});

Route::get('portofolio', function () {
    $data = SiteSetting::first();
    return view('front.pages.portofolio', [
        'data' => $data,
    ]);
});

Route::get('kontakkami', function () {
    $data = SiteSetting::first();
    return view('front.pages.kontakkami', [
        'data' => $data,
    ]);
});
