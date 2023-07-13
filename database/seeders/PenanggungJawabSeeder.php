<?php

namespace Database\Seeders;

use App\Models\PenanggungJawab;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PenanggungJawabSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        PenanggungJawab::create([
            'nama'      => 'Sutikno',
            'jabatan'   => 'Kepala Desa Bluru',
        ]);
    }
}
