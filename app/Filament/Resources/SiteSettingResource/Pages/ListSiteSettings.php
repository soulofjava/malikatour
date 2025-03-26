<?php

namespace App\Filament\Resources\SiteSettingResource\Pages;

use App\Filament\Resources\SiteSettingResource;
use App\Models\SiteSetting;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListSiteSettings extends ListRecords
{
    protected static string $resource = SiteSettingResource::class;

    public function mount(): void
    {
        parent::mount();

        $firstWebsite = SiteSetting::first();

        if ($firstWebsite) {
            redirect(SiteSettingResource::getUrl('edit', ['record' => $firstWebsite->id]));
        } else {
            redirect(SiteSettingResource::getUrl('create'));
        }
    }
}
