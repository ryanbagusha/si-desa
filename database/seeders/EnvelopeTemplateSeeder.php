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

        EnvelopeTemplate::create([
            'nama' => 'Surat Keterangan Domisili',
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
                'keperluan' => [
                    'name' => 'keperluan',
                    'label' => 'Keperluan',
                    'sort' => 8,
                ],
            ]
        ]);

        EnvelopeTemplate::create([
            'nama' => 'Surat Pengantar Nikah',
            'meta' => [
                'nama' => [
                    'name' => 'nama',
                    'label' => 'Nama',
                    'sort' => 1
                ],
                'ttl' => [
                    'name' => 'ttl',
                    'label' => 'Tempat/Tanggal Lahir',
                    'sort' => 2
                ],
                'jenis_kelamin' => [
                    'name' => 'jenis_kelamin',
                    'label' => 'Jenis Kelamin',
                    'sort' => 3
                ],
                'agama' => [
                    'name' => 'agama',
                    'label' => 'Agama',
                    'sort' => 4
                ],
                'alamat' => [
                    'name' => 'alamat',
                    'label' => 'Alamat',
                    'sort' => 5
                ],
                'nama_pasangan' => [
                    'name' => 'nama_pasangan',
                    'label' => 'Nama Pasangan',
                    'sort' => 1
                ],
                'ttl_pasangan' => [
                    'name' => 'ttl_pasangan',
                    'label' => 'Tempat/Tanggal Lahir Pasangan',
                    'sort' => 2
                ],
                'jenis_kelamin_pasangan' => [
                    'name' => 'jenis_kelamin_pasangan',
                    'label' => 'Jenis Kelamin Pasangan',
                    'sort' => 3
                ],
                'agama_pasangan' => [
                    'name' => 'agama_pasangan',
                    'label' => 'Agama Pasangan',
                    'sort' => 4
                ],
                'alamat_pasangan' => [
                    'name' => 'alamat_pasangan',
                    'label' => 'Alamat Pasangan',
                    'sort' => 5
                ],
            ]
        ]);
    }
}
