<?php

namespace App\Filament\Resources\DomisiliResource\Pages;

use Filament\Pages\Actions;
use App\Models\EnvelopeTemplate;
use Filament\Resources\Pages\ListRecords;
use Illuminate\Database\Eloquent\Builder;
use App\Filament\Resources\DomisiliResource;

class ListDomisilis extends ListRecords
{
    protected static string $resource = DomisiliResource::class;

    protected function getActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }

    protected function getTableQuery(): Builder
    {
        $envelope = EnvelopeTemplate::whereNama('Surat Keterangan Domisili')->first();

        return parent::getTableQuery()
            ->whereBelongsTo($envelope)
            ->withoutGlobalScopes();
    }
}
