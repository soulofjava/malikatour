<?php

namespace App\Filament\Resources\PortofolioResource\Pages;

use Filament\Actions;
use App\Models\Portofolio;
use Filament\Resources\Pages\ListRecords;
use App\Filament\Resources\PortofolioResource;

class ListPortofolios extends ListRecords
{
    protected static string $resource = PortofolioResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }

    public function mount(): void
    {
        parent::mount();

        $firstWebsite = Portofolio::first();

        if ($firstWebsite) {
            redirect(PortofolioResource::getUrl('edit', ['record' => $firstWebsite->id]));
        } else {
            redirect(PortofolioResource::getUrl('create'));
        }
    }
}
