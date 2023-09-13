<?php

namespace App\Filament\Resources\PengantarNikahResource\Pages;

use Filament\Pages\Actions;
use Illuminate\Database\Eloquent\Model;
use Filament\Resources\Pages\CreateRecord;
use App\Filament\Resources\PengantarNikahResource;

class CreatePengantarNikah extends CreateRecord
{
    protected static string $resource = PengantarNikahResource::class;

    protected function handleRecordCreation(array $data): Model
    {
        $value = [
            'nama' => $data['nama'],
            'ttl' => $data['ttl'],
            'jenis_kelamin' => $data['jenis_kelamin'],
            'agama' => $data['agama'],
            'alamat' => $data['alamat'],
            'nama_pasangan' => $data['nama_pasangan'],
            'ttl_pasangan' => $data['ttl_pasangan'],
            'jenis_kelamin_pasangan' => $data['jenis_kelamin_pasangan'],
            'agama_pasangan' => $data['agama_pasangan'],
            'alamat_pasangan' => $data['alamat_pasangan'],
        ];

        $envelope = static::getModel()::create([
            'no_surat' => $data['no_surat'],
            'tanggal' => $data['tanggal'],
            'value' => $value,
            'envelope_template_id' => $data['envelope_template_id'],
            'penanggung_jawab_id' => $data['penanggung_jawab_id'],
        ]);

        return $envelope;
    }

    protected function getRedirectUrl(): string
    {
        return $this->previousUrl ?? $this->getResource()::getUrl('index');
    }
}
