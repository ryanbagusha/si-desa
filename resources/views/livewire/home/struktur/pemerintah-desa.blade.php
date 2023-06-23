@push('styles')
    <style>
        #pemerintah-desa-tree {
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
                    <li>Pemerintah Desa</li>
                </ol>
                <h2>Struktur Pemerintah Desa</h2>

            </div>
        </section><!-- End Breadcrumbs -->

        <section id="pemerintah-desa" class="pemerintah-desa">


            <div class="container">
                <div id="pemerintah-desa-tree"></div>
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
                'name': 'BPD',
                'title': 'Badan Permusyawaratan Desa',
                'children': [{
                    'name': 'Kepala Desa',
                    'title': 'Sutikno',
                    'children': [{
                            'name': 'Kasi',
                            // 'title': '',
                            'children': [{
                                    'name': 'Kasi Pemerintahan',
                                    'title': 'Resti Eka Yuliani'
                                },
                                {
                                    'name': 'Kasi Pelayanan & Kesejahteraan',
                                    'title': 'Tri Nugroho, S.H'
                                }
                            ]
                        },
                        {
                            'name': 'Kadus',
                            // 'title': '',
                            'children': [{
                                    'name': 'Kadus I',
                                    'title': 'Erwan Setyabudi, S. Pd'
                                },
                                {
                                    'name': 'Kadus II',
                                    'title': '-'
                                },
                                {
                                    'name': 'Kadus III',
                                    'title': 'M. Labib Zaenuri'
                                }
                            ]
                        },
                        {
                            'name': 'Sekertariat Desa',
                            'title': 'Agus Sutrisno, S. Sos',
                            'children': [{
                                    'name': 'Kaur Umum & Pencairan',
                                    'title': 'Nurul Suryaningsih, SE'
                                },
                                {
                                    'name': 'Kaur Keuangan/Bendahara',
                                    'title': 'Erlinawat, AMK'
                                },
                            ]
                        },
                    ]
                }, ]
            };

            $('#pemerintah-desa-tree').orgchart({
                'data': datascource,
                'nodeContent': 'title',
            });

            $('.title').filter(function() {
                return $(this).text().trim() === 'Kadus';
            }).addClass('d-none');

            $('.title').filter(function() {
                return $(this).text().trim() === 'Kasi';
            }).addClass('d-none');
        });
    </script>
@endpush
