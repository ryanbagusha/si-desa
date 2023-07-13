<div class="space-y-4 my-5 font-serif">
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
        <div class="text-center text-lg">
            <p class="underline uppercase">{{ $envelope->envelopeTemplate->nama }}</p>
            <p> NOMOR : {{ $envelope->no_surat }}</p>
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
                    <td class="px-4">NIK</td>
                    <td> : </td>
                    <td>{{ $envelope->value['nik'] }}</td>
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
                    <td class="px-4">Pekerjaan</td>
                    <td> : </td>
                    <td>{{ $envelope->value['pekerjaan'] }}</td>
                </tr>
                <tr>
                    <td class="px-4">Alamat</td>
                    <td> : </td>
                    <td>{{ $envelope->value['alamat'] }}</td>
                </tr>
            </table>
            <p class="indent-8">Dengan ini diterangkan dengan benar bahwa nama yang tersebut di atas memang benar
                memiliki usaha sebagai berikut : </p>
            <ol class="list-inside list-decimal px-8">
                @foreach (explode(',', $envelope->value['usaha']) as $key => $value)
                    <li>{{ $value }}</li>
                @endforeach
            </ol>
            <p class="indent-8">Adapun alamat usaha berada di {{ $envelope->value['alamat_usaha'] }}.</p>
            <p class="indent-8">Demikian surat keterangan ini dibuat dan diberikan kepada yang bersangkutan agar dapat
                dipergunakan sebagaimana mestinya.</p>
        </div>

        <div class="grid grid-cols-4 gap-4">
            <div></div>
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
