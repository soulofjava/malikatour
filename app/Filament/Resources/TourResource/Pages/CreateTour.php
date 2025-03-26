<?php

namespace App\Filament\Resources\TourResource\Pages;

use App\Filament\Resources\TourResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateTour extends CreateRecord
{
    protected static string $resource = TourResource::class;

    protected function getRedirectUrl(): string
    {
        // Mengarahkan ke halaman index (list data) setelah berhasil menyimpan
        return TourResource::getUrl('index');
    }
}
