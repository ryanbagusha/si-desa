<?php

namespace App\Filament\Resources\SuratKeteranganUsahaResource\Pages;

use Filament\Pages\Actions;
use Illuminate\Database\Eloquent\Model;
use Filament\Resources\Pages\CreateRecord;
use App\Filament\Resources\SuratKeteranganUsahaResource;

class CreateSuratKeteranganUsaha extends CreateRecord
{
    protected static string $resource = SuratKeteranganUsahaResource::class;

    protected function handleRecordCreation(array $data): Model
    {
        $value = [
            'nama'              => $data['nama'],
            'nik'               => $data['nik'],
            'ttl'               => $data['ttl'],
            'jenis_kelamin'     => $data['jenis_kelamin'],
            'agama'             => $data['agama'],
            'pekerjaan'         => $data['pekerjaan'],
            'alamat'            => $data['alamat'],
            'usaha'             => $data['usaha'],
            'alamat_usaha'      => $data['alamat_usaha'],
        ];

        $envelope = static::getModel()::create([
            'no_surat'              => $data['no_surat'],
            'tanggal'               => $data['tanggal'],
            'value'                 => $value,
            'envelope_template_id'  => $data['envelope_template_id'],
            'penanggung_jawab_id'    => $data['penanggung_jawab_id'],
        ]);

        return $envelope;
    }

    protected function getRedirectUrl(): string
    {
        return $this->previousUrl ?? $this->getResource()::getUrl('index');
    }
}
