<?php

namespace App\Filament\Resources\SuratKeteranganUsahaResource\Pages;

use Filament\Pages\Actions;
use Illuminate\Database\Eloquent\Model;
use Filament\Resources\Pages\EditRecord;
use App\Filament\Resources\SuratKeteranganUsahaResource;

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

        $data['nama'] = $value['nama'];
        $data['nik'] = $value['nik'];
        $data['ttl'] = $value['ttl'];
        $data['jenis_kelamin'] = $value['jenis_kelamin'];
        $data['agama'] = $value['agama'];
        $data['pekerjaan'] = $value['pekerjaan'];
        $data['alamat'] = $value['alamat'];
        $data['usaha'] = $value['usaha'];
        $data['alamat_usaha'] = $value['alamat_usaha'];

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
            'pekerjaan' => $data['pekerjaan'],
            'alamat' => $data['alamat'],
            'usaha' => $data['usaha'],
            'alamat_usaha' => $data['alamat_usaha'],
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
