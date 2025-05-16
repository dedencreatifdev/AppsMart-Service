<?php

namespace App\Filament\Resources;

use App\Filament\Resources\KendaraanResource\Pages;
use App\Filament\Resources\KendaraanResource\RelationManagers;
use App\Models\Kendaraan;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class KendaraanResource extends Resource
{
    protected static ?string $model = Kendaraan::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';
    protected static ?string $navigationGroup = 'Master Data';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('no_polisi')
                    ->required()
                    ->maxLength(100),
                Forms\Components\TextInput::make('kdnsb')
                    ->required()
                    ->maxLength(100),
                Forms\Components\TextInput::make('kdjns')
                    ->required()
                    ->maxLength(100),
                Forms\Components\TextInput::make('kendaraan')
                    ->required()
                    ->maxLength(100),
                Forms\Components\TextInput::make('kdtype')
                    ->required()
                    ->maxLength(100),
                Forms\Components\TextInput::make('no_chasis')
                    ->required()
                    ->maxLength(100),
                Forms\Components\TextInput::make('no_mesin')
                    ->required()
                    ->maxLength(100),
                Forms\Components\TextInput::make('no_seri')
                    ->required()
                    ->maxLength(100),
                Forms\Components\TextInput::make('tahun')
                    ->required()
                    ->maxLength(8),
                Forms\Components\TextInput::make('warna')
                    ->required()
                    ->maxLength(50),
                Forms\Components\TextInput::make('no_bpkb')
                    ->required()
                    ->maxLength(100),
                Forms\Components\TextInput::make('no_faktur')
                    ->required()
                    ->maxLength(100),
                Forms\Components\TextInput::make('tg_stnk')
                    ->required()
                    ->maxLength(100),
                Forms\Components\TextInput::make('atasnama')
                    ->required()
                    ->maxLength(100),
                Forms\Components\TextInput::make('alamat')
                    ->required()
                    ->maxLength(100),
                Forms\Components\TextInput::make('km_akhir')
                    ->required()
                    ->maxLength(100),
                Forms\Components\TextInput::make('km_hari')
                    ->required()
                    ->maxLength(100),
                Forms\Components\TextInput::make('tg_jual')
                    ->required()
                    ->maxLength(100),
                Forms\Components\TextInput::make('tg_daftar')
                    ->required()
                    ->maxLength(100),
                Forms\Components\TextInput::make('keterangan')
                    ->required()
                    ->maxLength(100),
                Forms\Components\TextInput::make('id_kode')
                    ->required()
                    ->maxLength(100),
                Forms\Components\TextInput::make('id_comp')
                    ->required()
                    ->maxLength(100),
                Forms\Components\TextInput::make('flag')
                    ->required()
                    ->maxLength(100),
                Forms\Components\TextInput::make('ft_nmpemilik')
                    ->required()
                    ->maxLength(100),
                Forms\Components\TextInput::make('ft_jnskend')
                    ->required()
                    ->maxLength(100),
            ])
            ->columns(4);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('no_polisi')
                    ->searchable(),
                Tables\Columns\TextColumn::make('kdnsb')
                    ->searchable(),
                Tables\Columns\TextColumn::make('kdjns')
                    ->searchable(),
                Tables\Columns\TextColumn::make('kendaraan')
                    ->searchable(),
                Tables\Columns\TextColumn::make('kdtype')
                    ->searchable(),
                Tables\Columns\TextColumn::make('no_chasis')
                    ->searchable(),
                Tables\Columns\TextColumn::make('no_mesin')
                    ->searchable(),
                Tables\Columns\TextColumn::make('no_seri')
                    ->searchable(),
                Tables\Columns\TextColumn::make('tahun')
                    ->searchable(),
                Tables\Columns\TextColumn::make('warna')
                    ->searchable(),
                Tables\Columns\TextColumn::make('no_bpkb')
                    ->searchable(),
                Tables\Columns\TextColumn::make('no_faktur')
                    ->searchable(),
                Tables\Columns\TextColumn::make('tg_stnk')
                    ->searchable(),
                Tables\Columns\TextColumn::make('atasnama')
                    ->searchable(),
                Tables\Columns\TextColumn::make('alamat')
                    ->searchable(),
                Tables\Columns\TextColumn::make('km_akhir')
                    ->searchable(),
                Tables\Columns\TextColumn::make('km_hari')
                    ->searchable(),
                Tables\Columns\TextColumn::make('tg_jual')
                    ->searchable(),
                Tables\Columns\TextColumn::make('tg_daftar')
                    ->searchable(),
                Tables\Columns\TextColumn::make('keterangan')
                    ->searchable(),
                Tables\Columns\TextColumn::make('id_kode')
                    ->searchable(),
                Tables\Columns\TextColumn::make('id_comp')
                    ->searchable(),
                Tables\Columns\TextColumn::make('flag')
                    ->searchable(),
                Tables\Columns\TextColumn::make('ft_nmpemilik')
                    ->searchable(),
                Tables\Columns\TextColumn::make('ft_jnskend')
                    ->searchable(),
                Tables\Columns\TextColumn::make('created_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
                Tables\Columns\TextColumn::make('updated_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
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
            'index' => Pages\ListKendaraans::route('/'),
            'create' => Pages\CreateKendaraan::route('/create'),
            'edit' => Pages\EditKendaraan::route('/{record}/edit'),
        ];
    }
}
