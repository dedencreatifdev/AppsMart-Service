<?php

namespace App\Filament\Resources\LevelResource\Pages;

use App\Models\Level;
use Filament\Actions;
use App\Models\LevelPermision;
use Filament\Support\Enums\Alignment;
use Filament\Support\Enums\ActionSize;
use Filament\Forms\Components\TextInput;
use Filament\Notifications\Notification;
use App\Filament\Resources\LevelResource;
use Filament\Resources\Pages\ManageRecords;

class ManageLevels extends ManageRecords
{
    protected static string $resource = LevelResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make()
                ->label('Tambah Level')
                ->size(ActionSize::ExtraSmall)
                ->modal()
                ->modalWidth('md')
                ->form([
                    TextInput::make('nama')
                        ->required()
                        ->columnSpanFull()
                        ->maxLength(255)
                ])
                ->action(function (array $data): void {
                    $levelData = Level::create([
                        'nama' => $data['nama']
                    ]);

                    $path = app_path('Models') . '/*.php';
                    // dd(collect(glob($path))->map(fn ($file) => basename($file, '.php'))->toArray()) ;
                    $nama_model = collect(glob($path))->map(fn($file) => basename($file, '.php'))->toArray();

                    foreach ($nama_model as $model) {
                        // if ($model != 'Level' && $model != 'LevelPermision') {
                            LevelPermision::factory()->create([
                                'level_id' => $levelData->id,
                                'nama' => $model,
                                'lihat' => 1,
                                // 'tambah' => 0,
                                // 'edit' => 0,
                                // 'hapus' => 0,
                            ]);
                        // }
                    }
                    // LevelPermision::factory()->create([
                    //     'level_id' => $levelData->id,
                    // ]);

                })
                ->successNotificationTitle('Level berhasil ditambahkan')
            // ->modalAlignment(Alignment::Center)
            ,

        ];
    }


    protected function afterCreate(): void
    {
        LevelPermision::create([
            'level_id' => 321,
            'nama' => 1,
            'tambah' => 1,
        ]);
    }
}
