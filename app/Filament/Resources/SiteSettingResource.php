<?php

namespace App\Filament\Resources;

use Filament\Forms;
use Filament\Tables;
use Filament\Forms\Form;
use Filament\Tables\Table;
use App\Models\SiteSetting;
use Filament\Resources\Resource;
use Filament\Forms\Components\TextInput;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use App\Filament\Resources\SiteSettingResource\Pages;
use FilamentTiptapEditor\TiptapEditor;
use App\Filament\Resources\SiteSettingResource\RelationManagers;

class SiteSettingResource extends Resource
{
    protected static ?string $model = SiteSetting::class;

    protected static ?string $navigationIcon = 'heroicon-o-cog';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                TextInput::make('alamat')
                    ->label('Alamat')
                    ->required()
                    ->columnSpanFull(),

                TextInput::make('email')
                    ->label('Email')
                    ->email()
                    ->required(),

                TextInput::make('kontak')
                    ->label('Kontak')
                    ->required(),

                TextInput::make('whatsapp')
                    ->label('WhatsApp (Untuk Link)')
                    ->required(),

                TextInput::make('instagram')
                    ->label('Instagram'),

                TextInput::make('tiktok')
                    ->label('TikTok'),

                TiptapEditor::make('sambutan')
                    ->label('Sambutan')
                    ->columnSpanFull(),

                TiptapEditor::make('kontak_kami')
                    ->label('Tentang Kami')
                    ->columnSpanFull(),

                \Filament\Forms\Components\FileUpload::make('path_cv')
                    ->label('Upload CV (PDF)')
                    ->acceptedFileTypes(['application/pdf'])
                    ->directory('site-cv')
                    ->downloadable()
                    ->openable()
                    ->columnSpanFull(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                //
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ]);
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListSiteSettings::route('/'),
            'create' => Pages\CreateSiteSetting::route('/create'),
            'edit' => Pages\EditSiteSetting::route('/{record}/edit'),
        ];
    }
}
