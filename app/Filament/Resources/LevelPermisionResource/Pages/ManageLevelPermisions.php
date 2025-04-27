<?php

namespace App\Filament\Resources\LevelPermisionResource\Pages;

use App\Filament\Resources\LevelPermisionResource;
use Filament\Actions;
use Filament\Resources\Pages\ManageRecords;

class ManageLevelPermisions extends ManageRecords
{
    protected static string $resource = LevelPermisionResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
