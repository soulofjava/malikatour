<?php

namespace App\Filament\Resources;

use Filament\Forms;
use App\Models\User;
use Filament\Tables;
use Filament\Forms\Form;
use Filament\Tables\Table;
use Filament\Resources\Resource;
use Filament\Forms\Components\Select;
use Illuminate\Database\Eloquent\Builder;
use App\Filament\Resources\UserResource\Pages;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use App\Filament\Resources\UserResource\RelationManagers;

class UserResource extends Resource
{
    protected static ?string $model = User::class;

    protected static ?string $navigationIcon = 'heroicon-o-users';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([

                // Field Nama (Selalu wajib diisi)
                Forms\Components\TextInput::make('name')
                    ->label('Nama')
                    ->required() // Wajib diisi
                    ->maxLength(255),

                // Field Email (Selalu wajib diisi)
                Forms\Components\TextInput::make('email')
                    ->label('Email')
                    ->email()
                    ->required() // Wajib diisi
                    ->maxLength(255),

                // Field Password (Wajib saat Create, opsional saat Edit)
                Forms\Components\TextInput::make('password')
                    ->label('Password')
                    ->password()
                    ->maxLength(255)
                    ->required(fn($record) => is_null($record)) // Wajib saat Create
                    ->dehydrated(fn($state) => filled($state)) // Hanya dikirim ke database jika diisi
                    ->live(), // Perubahan langsung divalidasi

                // Field Password Confirmation (Harus diisi jika Password diisi)
                Forms\Components\TextInput::make('password_confirmation')
                    ->label('Konfirmasi Password')
                    ->password()
                    ->same('password') // Harus sama dengan password
                    ->required(fn($get, $record) => is_null($record) || filled($get('password'))) // Wajib saat Create atau jika Password diisi saat Edit
                    ->dehydrated(false) // Tidak dikirim ke database
                    ->live(), // Validasi langsung saat mengetik
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('name')
                    ->label('Nama')
                    ->searchable()
                    ->sortable(),

                Tables\Columns\TextColumn::make('email')
                    ->label('Email')
                    ->searchable()
                    ->sortable(),
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
            'index' => Pages\ListUsers::route('/'),
            'create' => Pages\CreateUser::route('/create'),
            'edit' => Pages\EditUser::route('/{record}/edit'),
        ];
    }
}
