<?php

namespace App\Filament\Resources\SKTMResource\Pages;

use Filament\Pages\Actions;
use Illuminate\Database\Eloquent\Model;
use App\Filament\Resources\SKTMResource;
use Filament\Resources\Pages\CreateRecord;

class CreateSKTM extends CreateRecord
{
    protected static string $resource = SKTMResource::class;

    protected function handleRecordCreation(array $data): Model
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