<?php

namespace App\Filament\Resources\DomisiliResource\Pages;

use Filament\Pages\Actions;
use Illuminate\Database\Eloquent\Model;
use Filament\Resources\Pages\CreateRecord;
use App\Filament\Resources\DomisiliResource;

class CreateDomisili extends CreateRecord
{
    protected static string $resource = DomisiliResource::class;

    protected function handleRecordCreation(array $data): Model
    {
        $value = [
            'nama' => $data['nama'],
            'nik' => $data['nik'],
            'ttl' => $data['ttl'],
            'jenis_kelamin' => $data['jenis_kelamin'],
            'agama' => $data['agama'],
            'pekerjaan' => $data['pekerjaan'],
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
