@push('styles')
    <style>
        #badan-permusyawaratan-desa-tree {
            position: relative;
            height: 420px;
            margin: 0.5rem;
            overflow: auto;
            text-align: center;
        }
    </style>
@endpush

<div>
    <main id="main">

        <!-- ======= Breadcrumbs ======= -->
        <div style="height: 72px;background: rgba(40, 58, 90, 0.9);" class=""></div>
        <section class="breadcrumbs">
            <div class="container">

                <ol>
                    <li><a href="{{ route('home') }}">Home</a></li>
                    <li><a href="#">Struktur</a></li>
                    <li>Badan Permusyawaratan Desa</li>
                </ol>
                <h2>Struktur Badan Permusyawaratan Desa</h2>

            </div>
        </section><!-- End Breadcrumbs -->

        <section id="badan-permusyawaratan-desa" class="badan-permusyawaratan-desa">


            <div class="container">
                <div id="badan-permusyawaratan-desa-tree"></div>
            </div>

        </section>
    </main>
</div>

@push('scripts')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.js"
        integrity="sha512-WNLxfP/8cVYL9sj8Jnp6et0BkubLP31jhTG9vhL/F5uEZmg5wEzKoXp1kJslzPQWwPT1eyMiSxlKCgzHLOTOTQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/orgchart/3.7.0/js/jquery.orgchart.js"
        integrity="sha512-QWdrRhS5f1vEZsterDkW9inwYhupQ/E7NPUcXy3Zh5hy4NWSehUCaGecorPDW/std73B2N5Hr3OIQPvrNiHLsA=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script>
        $(function() {

            var datascource = {
                'name': 'Ketua',
                'title': 'Anung Zainuri. A',
                'children': [{
                    'name': 'Wakil Ketua',
                    'title': 'Fatchurrachman',
                    'children': [{
                            'name': 'Sekretaris',
                            'title': 'Beni Artiyani'
                        },
                        {
                            'name': 'Anggota',
                            'title': 'Hapus',
                            'children': [{
                                    'name': 'Anggota',
                                    'title': 'Anton Triwono'
                                },
                                {
                                    'name': 'Anggota',
                                    'title': 'Dodi Prasetio'
                                },
                            ]
                        }
                    ]
                }, ]
            };

            $('#badan-permusyawaratan-desa-tree').orgchart({
                'data': datascource,
                'nodeContent': 'title',
            });

            $('.content').filter(function() {
                return $(this).text().trim() === 'Hapus';
            }).addClass('d-none');
        });
    </script>
@endpush
