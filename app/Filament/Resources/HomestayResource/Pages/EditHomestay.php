<?php

namespace App\Filament\Resources\HomestayResource\Pages;

use App\Filament\Resources\HomestayResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditHomestay extends EditRecord
{
    protected static string $resource = HomestayResource::class;

    protected function getRedirectUrl(): string
    {
        // Mengarahkan ke halaman index (list data) setelah berhasil menyimpan
        return HomestayResource::getUrl('index');
    }

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
