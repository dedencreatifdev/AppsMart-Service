<?php

namespace App\Filament\Resources;

use App\Filament\Resources\LevelPermisionResource\Pages;
use App\Filament\Resources\LevelPermisionResource\RelationManagers;
use App\Models\LevelPermision;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class LevelPermisionResource extends Resource
{
    protected static ?string $model = LevelPermision::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('level_id')
                    ->required()
                    ->maxLength(36),
                Forms\Components\TextInput::make('nama')
                    ->maxLength(255),
                Forms\Components\Toggle::make('lihat'),
                Forms\Components\Toggle::make('tambah'),
                Forms\Components\Toggle::make('edit'),
                Forms\Components\Toggle::make('hapus'),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('nama')
                    ->searchable(),
                Tables\Columns\IconColumn::make('lihat')
                    ->boolean(),
                Tables\Columns\IconColumn::make('tambah')
                    ->boolean(),
                Tables\Columns\IconColumn::make('edit')
                    ->boolean(),
                Tables\Columns\IconColumn::make('hapus')
                    ->boolean(),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
                Tables\Actions\DeleteAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ]);
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ManageLevelPermisions::route('/'),
        ];
    }
}
