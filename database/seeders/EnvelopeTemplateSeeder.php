<?php

namespace Database\Seeders;

use App\Models\EnvelopeTemplate;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class EnvelopeTemplateSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        EnvelopeTemplate::create([
            'nama' => 'Surat Keterangan Usaha',
            'meta' => [
                'nama' => [
                    'name' => 'nama',
                    'label' => 'Nama',
                    'sort' => 1
                ],
                'nik' => [
                    'name' => 'nik',
                    'label' => 'NIK',
                    'sort' => 2
                ],
                'ttl' => [
                    'name' => 'ttl',
                    'label' => 'Tempat/Tanggal Lahir',
                    'sort' => 3
                ],
                'jenis_kelamin' => [
                    'name' => 'jenis_kelamin',
                    'label' => 'Jenis Kelamin',
                    'sort' => 4
                ],
                'agama' => [
                    'name' => 'agama',
                    'label' => 'Agama',
                    'sort' => 5
                ],
                'pekerjaan' => [
                    'name' => 'pekerjaan',
                    'label' => 'Pekerjaan',
                    'sort' => 6
                ],
                'alamat' => [
                    'name' => 'alamat',
                    'label' => 'Alamat',
                    'sort' => 7
                ],
                'usaha' => [
                    'name' => 'usaha',
                    'label' => 'Usaha',
                    'sort' => 8,
                    'hint' => 'Jika memiliki lebih dari satu usaha, pisahkan dengan tanda koma (,)'
                ],
                'alamat_usaha' => [
                    'name' => 'alamat_usaha',
                    'label' => 'Alamat Usaha',
                    'sort' => 9
                ],
            ]
        ]);

        EnvelopeTemplate::create([
            'nama' => 'Surat Keterangan Tidak Mampu',
            'meta' => [
                'nama' => [
                    'name' => 'nama',
                    'label' => 'Nama',
                    'sort' => 1
                ],
                'nik' => [
                    'name' => 'nik',
                    'label' => 'NIK',
                    'sort' => 2
                ],
                'ttl' => [
                    'name' => 'ttl',
                    'label' => 'Tempat/Tanggal Lahir',
                    'sort' => 3
                ],
                'jenis_kelamin' => [
                    'name' => 'jenis_kelamin',
                    'label' => 'Jenis Kelamin',
                    'sort' => 4
                ],
                'agama' => [
                    'name' => 'agama',
                    'label' => 'Agama',
                    'sort' => 5
                ],
                'alamat' => [
                    'name' => 'alamat',
                    'label' => 'Alamat',
                    'sort' => 6
                ],
                'keperluan' => [
                    'name' => 'keperluan',
                    'label' => 'Keperluan',
                    'sort' => 7,
                ],
            ]
        ]);
    }
}