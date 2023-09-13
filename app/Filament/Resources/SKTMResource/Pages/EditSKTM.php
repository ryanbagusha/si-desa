<?php

namespace App\Filament\Resources\SKTMResource\Pages;

use App\Filament\Resources\SKTMResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\EditRecord;

class EditSKTM extends EditRecord
{
    protected static string $resource = SKTMResource::class;

    protected function getActions(): array
    {
        return [
            // Actions\DeleteAction::make(),
        ];
    }

    protected function mutateFormDataBeforeFill(array $data): array
    {
        $value = $this->record->value;

        $data['nama'] = $value['nama'];
        $data['nik'] = $value['nik'];
        $data['ttl'] = $value['ttl'];
        $data['jenis_kelamin'] = $value['jenis_kelamin'];
        $data['agama'] = $value['agama'];
        $data['alamat'] = $value['alamat'];
        $data['keperluan'] = $value['keperluan'];

        return $data;
    }

    protected function getRedirectUrl(): string
    {
        return $this->previousUrl ?? $this->getResource()::getUrl('index');
    }
}
