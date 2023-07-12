<?php

namespace App\Filament\Resources\ResidentResource\Pages;

use App\Filament\Resources\ResidentResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\ManageRecords;

class ManageResidents extends ManageRecords
{
    protected static string $resource = ResidentResource::class;

    protected function getActions(): array
    {
        return [
            Actions\CreateAction::make(),
            Actions\Action::make('import')
                ->color('secondary'),
        ];
    }
}
