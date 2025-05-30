<?php

use App\Http\Middleware\TrackVisitor;
use App\Models\Tour;
use App\Models\SiteSetting;
use Illuminate\Support\Facades\Route;

Route::middleware(['web', TrackVisitor::class])->group(
    function () {
        Route::get('/tour/{tour}', function (Tour $tour) {
            $data = SiteSetting::first();
            return view('front.pages.tour', ['tour' => $tour, 'data' => $data]);
        })->name('tour.detail');

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

        Route::get('layanan', function () {

            $data = SiteSetting::first();
            // Ambil semua data tour
            $tours = Tour::with('kategori')->latest()->get(); // opsional: tambah relasi kategori
            $kategoriList = $tours->pluck('kategori.nama')->unique()->filter()->values();
            return view('front.pages.layanan', [
                'data' => $data,
                'tours' => $tours,
                'kategoriList' => $kategoriList,
            ]);
        });
    }
);
