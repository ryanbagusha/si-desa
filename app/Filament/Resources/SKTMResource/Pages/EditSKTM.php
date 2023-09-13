<?php

namespace App\Filament\Resources\SKTMResource\Pages;

use Filament\Pages\Actions;
use Illuminate\Database\Eloquent\Model;
use App\Filament\Resources\SKTMResource;
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

    protected function handleRecordUpdate(Model $record, array $data): Model
    {
        $value = [
            'nama' => $data['nama'],
            'nik' => $data['nik'],
            'ttl' => $data['ttl'],
            'jenis_kelamin' => $data['jenis_kelamin'],
            'agama' => $data['agama'],
            'alamat' => $data['alamat'],
            'keperluan' => $data['keperluan'],
        ];

        $record->update([
            'no_surat' => $data['no_surat'],
            'tanggal' => $data['tanggal'],
            'value' => $value,
            'envelope_template_id' => $data['envelope_template_id'],
            'penanggung_jawab_id' => $data['penanggung_jawab_id'],
        ]);

        return $record;
    }

    protected function getRedirectUrl(): string
    {
        return $this->previousUrl ?? $this->getResource()::getUrl('index');
    }
}
