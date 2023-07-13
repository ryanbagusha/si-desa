<?php

namespace App\Filament\Resources\PenanggungJawabResource\Pages;

use App\Filament\Resources\PenanggungJawabResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\ManageRecords;

class ManagePenanggungJawabs extends ManageRecords
{
    protected static string $resource = PenanggungJawabResource::class;

    protected function getActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
