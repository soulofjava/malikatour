<?php

use App\Models\Tour;
use App\Models\Homestay;
use App\Models\SiteSetting;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

Route::get('layanan', function (Request $request) {
    $filter = $request->query('filter', 'all'); // ambil ?filter= dari URL, default all

    if ($filter == 'tour') {
        $items = Tour::all();
    } elseif ($filter == 'homestay') {
        $items = Homestay::all();
    } else {
        // gabungkan
        $tours = Tour::all();
        $homestays = Homestay::all();
        $items = $tours->concat($homestays);
    }
    
    $data = SiteSetting::first();
    return view('front.pages.layanan', [
        'data' => $data,
        'items' => $items,
        'filter' => $filter,
    ]);
});
