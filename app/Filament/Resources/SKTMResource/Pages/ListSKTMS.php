<?php

namespace App\Filament\Resources\SKTMResource\Pages;

use Filament\Pages\Actions;
use App\Models\EnvelopeTemplate;
use App\Filament\Resources\SKTMResource;
use Filament\Resources\Pages\ListRecords;
use Illuminate\Database\Eloquent\Builder;

class ListSKTMS extends ListRecords
{
    protected static string $resource = SKTMResource::class;

    protected function getActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }

    protected function getTableQuery(): Builder
    {
        $envelope = EnvelopeTemplate::whereNama('Surat Keterangan Tidak Mampu')->first();

        return parent::getTableQuery()
            ->whereBelongsTo($envelope)
            ->withoutGlobalScopes();
    }
}
