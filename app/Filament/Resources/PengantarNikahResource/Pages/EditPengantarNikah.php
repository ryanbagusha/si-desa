<?php

namespace App\Filament\Resources\PengantarNikahResource\Pages;

use Filament\Pages\Actions;
use Illuminate\Database\Eloquent\Model;
use Filament\Resources\Pages\EditRecord;
use App\Filament\Resources\PengantarNikahResource;

class EditPengantarNikah extends EditRecord
{
    protected static string $resource = PengantarNikahResource::class;

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
        $data['ttl'] = $value['ttl'];
        $data['jenis_kelamin'] = $value['jenis_kelamin'];
        $data['agama'] = $value['agama'];
        $data['alamat'] = $value['alamat'];
        $data['nama_pasangan'] = $value['nama_pasangan'];
        $data['ttl_pasangan'] = $value['ttl_pasangan'];
        $data['jenis_kelamin_pasangan'] = $value['jenis_kelamin_pasangan'];
        $data['agama_pasangan'] = $value['agama_pasangan'];
        $data['alamat_pasangan'] = $value['alamat_pasangan'];

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
