<?php

namespace App\Filament\Resources;

use Filament\Forms;
use Filament\Tables;
use Filament\Forms\Form;
use App\Models\Portofolio;
use Filament\Tables\Table;
use Filament\Resources\Resource;
use Filament\Tables\Columns\TextColumn;
use Filament\Forms\Components\TextInput;
use Filament\Tables\Columns\ImageColumn;
use Filament\Forms\Components\FileUpload;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use App\Filament\Resources\PortofolioResource\Pages;
use App\Filament\Resources\PortofolioResource\RelationManagers;

class PortofolioResource extends Resource
{
    protected static ?string $model = Portofolio::class;

    protected static ?string $navigationIcon = 'heroicon-o-photo';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                FileUpload::make('gambar')
                    ->label('Foto Portofolio')
                    ->helperText('Upload beberapa gambar. Drag untuk urutkan.')
                    ->multiple()
                    ->reorderable()
                    ->image()
                    ->preserveFilenames()
                    ->imagePreviewHeight(120)  // Ubah ke ukuran lebih kecil dan ringan
                    ->directory('portofolio')
                    ->disk('public')
                    ->panelLayout('grid')      // Penting! Biar preview rapi
                    ->columns(2)
                    ->columnSpan(12)              // 2 kolom cukup agar tidak panjang
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                ImageColumn::make('gambar.0') // ambil gambar pertama dari array
                    ->label('Foto')
                    ->getStateUsing(fn($record) => $record->gambar[0] ?? null)
                    ->url(fn($state) => $state ? asset('storage/portofolio/' . $state) : null)
                    ->height(100),
                TextColumn::make('judul')->searchable()->sortable(),
                TextColumn::make('created_at')->dateTime('d M Y')->label('Tanggal Upload'),
            ])
            ->defaultSort('created_at', 'desc')
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
            'index' => Pages\ListPortofolios::route('/'),
            'create' => Pages\CreatePortofolio::route('/create'),
            'edit' => Pages\EditPortofolio::route('/{record}/edit'),
        ];
    }
}
