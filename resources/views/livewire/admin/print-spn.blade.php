<div class="space-y-4 my-5 font-serif text-sm">
    <div class="border-b-2 border-black">
        <div class="flex h-32">
            <div class="flex-none w-1/6 h-14">
                <img src="{{ asset('images/logo_tala.png') }}" alt="logo_tala" class="ml-auto mt-4 w-16">
            </div>
            <div class="grow h-14">
                <div class="text-center">
                    <p class="text-lg leading-3">PEMERINTAH KABUPATEN TANAH LAUT</p>
                    <p class="text-lg">KECAMATAN BATU AMPAR</p>
                    <p class="text-2xl font-bold">DESA BLURU</p>
                    <p>Alamat: Jl. A. Yani RT 03 RW 01 Kode Pos: 70882</p>
                    <p class="leading-3">Email: kantordesabluru@gmail.com</p>
                </div>
            </div>
            <div class="flex-none w-1/6 h-14"></div>
        </div>
    </div>

    <div class="space-y-4 px-8">
        <div class="grid grid-cols-2">
            <div>
                <table>
                    <tr>
                        <td class="px-4">Nomor</td>
                        <td> : </td>
                        <td>{{ $envelope->no_surat }}</td>
                    </tr>
                    <tr>
                        <td class="px-4">Lamp</td>
                        <td> : </td>
                        <td>-</td>
                    </tr>
                    <tr>
                        <td class="px-4">Perihal</td>
                        <td> : </td>
                        <td>Pengantar Nikah</td>
                    </tr>
                </table>
            </div>
            <div class="ml-auto">
                <p>Kepada :</p>
                <p>Yth. Kepala KUA Batu Ampar</p>
                <p>Di</p>
                <p class="indent-8">Tempat</p>
            </div>
        </div>

        <div class="space-y-2">
            <p class="indent-8">Yang bertanda tangan di bawah ini {{ $envelope->penanggungJawab->jabatan }} Bluru
                Kecamatan Batu Ampar
                Kabupaten Tanah Laut menerangkan bahwa :</p>
            <table class="mx-4">
                <tr>
                    <td class="px-4">Nama</td>
                    <td> : </td>
                    <td>{{ $envelope->value['nama'] }}</td>
                </tr>
                <tr>
                    <td class="px-4">Tempat, Tanggal Lahir</td>
                    <td> : </td>
                    <td>{{ $envelope->value['ttl'] }}</td>
                </tr>
                <tr>
                    <td class="px-4">Jenis Kelamin</td>
                    <td> : </td>
                    <td>{{ $envelope->value['jenis_kelamin'] }}</td>
                </tr>
                <tr>
                    <td class="px-4">Agama</td>
                    <td> : </td>
                    <td>{{ $envelope->value['agama'] }}</td>
                </tr>
                <tr>
                    <td class="px-4">Alamat</td>
                    <td> : </td>
                    <td>{{ $envelope->value['alamat'] }}</td>
                </tr>
            </table>
            <p class="indent-8">Tersebut di atas benar warga Desa Bluru Rt 003 Rw 001 yang akan menikah dengan :</p>
            <table class="mx-4">
                <tr>
                    <td class="px-4">Nama</td>
                    <td> : </td>
                    <td>{{ $envelope->value['nama_pasangan'] }}</td>
                </tr>
                <tr>
                    <td class="px-4">Tempat, Tanggal Lahir</td>
                    <td> : </td>
                    <td>{{ $envelope->value['ttl_pasangan'] }}</td>
                </tr>
                <tr>
                    <td class="px-4">Jenis Kelamin</td>
                    <td> : </td>
                    <td>{{ $envelope->value['jenis_kelamin_pasangan'] }}</td>
                </tr>
                <tr>
                    <td class="px-4">Agama</td>
                    <td> : </td>
                    <td>{{ $envelope->value['agama_pasangan'] }}</td>
                </tr>
                <tr>
                    <td class="px-4">Alamat</td>
                    <td> : </td>
                    <td>{{ $envelope->value['alamat_pasangan'] }}</td>
                </tr>
            </table>
            <p class="indent-8">Tersebut diatas akan melangsungkan Pernikahan mohon di tindaklanjuti segala berkas
                terlampir.</p>
            <p class="indent-8">Demikian surat pengantar ini kami buat dan di berikan kepada yang bersangkutan untuk
                dapat di gunakan sebagai mana mestinya.</p>
        </div>

        <div class="grid grid-cols-3 gap-4">
            <div></div>
            <div></div>
            <div>
                <p>Bluru, {{ $envelope->tanggal->isoFormat('DD MMMM Y') }}</p>
                <p class="mb-16">{{ $envelope->penanggungJawab->jabatan }}</p>
                <p>{{ $envelope->penanggungJawab->nama }}</p>
            </div>
        </div>
    </div>
</div>
