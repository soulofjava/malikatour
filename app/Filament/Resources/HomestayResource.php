<?php

namespace App\Filament\Resources;

use Filament\Forms;
use Filament\Tables;
use App\Models\Homestay;
use Filament\Forms\Form;
use Filament\Tables\Table;
use Filament\Resources\Resource;
use Filament\Forms\Components\Textarea;
use Filament\Tables\Columns\TextColumn;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\FileUpload;
use Illuminate\Database\Eloquent\Builder;
use App\Filament\Resources\HomestayResource\Pages;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use App\Filament\Resources\HomestayResource\RelationManagers;

class HomestayResource extends Resource
{
    protected static ?string $model = Homestay::class;

    protected static ?string $navigationIcon = 'heroicon-o-home-modern';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                TextInput::make('nama')
                    ->label('Nama Homestay')
                    ->required()
                    ->maxLength(255),

                Textarea::make('deskripsi')
                    ->label('Deskripsi')
                    ->rows(4),

                TextInput::make('harga_sewa')
                    ->label('Harga Sewa per Malam')
                    ->prefix('Rp')
                    ->numeric()
                    ->required(),

                FileUpload::make('gambar')
                    ->label('Foto Homestay')
                    ->multiple()
                    ->image()
                    ->reorderable()
                    ->directory('homestays')
                    ->imagePreviewHeight('200')
                    ->panelAspectRatio('1:1') // rasio kotak
                    ->panelLayout('grid') // grid layout preview
                    ->columnSpanFull(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('nama')->label('Nama')->searchable(),
                TextColumn::make('harga_sewa')
                    ->label('Harga Sewa')
                    ->money('IDR', true),
                TextColumn::make('created_at')
                    ->label('Ditambahkan')
                    ->date('d M Y'),
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
            'index' => Pages\ListHomestays::route('/'),
            'create' => Pages\CreateHomestay::route('/create'),
            'edit' => Pages\EditHomestay::route('/{record}/edit'),
        ];
    }
}
