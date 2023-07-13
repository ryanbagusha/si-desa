<?php

namespace App\Filament\Resources\SuratKeteranganUsahaResource\Pages;

use App\Filament\Resources\SuratKeteranganUsahaResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\EditRecord;

class EditSuratKeteranganUsaha extends EditRecord
{
    protected static string $resource = SuratKeteranganUsahaResource::class;

    protected function getActions(): array
    {
        return [
            // Actions\DeleteAction::make(),
        ];
    }

    protected function mutateFormDataBeforeFill(array $data): array
    {
        $value = $this->record->value;

        $data['nama']           = $value['nama'];
        $data['nik']            = $value['nik'];
        $data['ttl']            = $value['ttl'];
        $data['jenis_kelamin']  = $value['jenis_kelamin'];
        $data['agama']          = $value['agama'];
        $data['pekerjaan']      = $value['pekerjaan'];
        $data['alamat']         = $value['alamat'];
        $data['usaha']          = $value['usaha'];
        $data['alamat_usaha']   = $value['alamat_usaha'];

        return $data;
    }

    protected function getRedirectUrl(): string
    {
        return $this->previousUrl ?? $this->getResource()::getUrl('index');
    }
}
