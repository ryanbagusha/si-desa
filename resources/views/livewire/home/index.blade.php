<div>
    <!-- ======= Hero Section ======= -->
    <section id="hero" class="d-flex align-items-center">

        <div class="container">
            <div class="row">
                <div class="col-lg-6 d-flex flex-column justify-content-center pt-4 pt-lg-0 order-2 order-lg-1">
                    <h1>Sistem Informasi Desa</h1>
                    <h2>Sarana komunikasi antara pemerintah desa, masyarakat, dan pihak terkait lainnya</h2>
                </div>
                <div class="col-lg-6 order-1 order-lg-2 hero-img">
                    <!-- Slider main container -->
                    <div class="swiper">
                        <!-- Additional required wrapper -->
                        <div class="swiper-wrapper">
                            <!-- Slides -->
                            <div class="swiper-slide">
                                <img src="{{ url('storage/asset_desa/asset_004.jpeg') }}"
                                    class="img-fluid rounded w-full" alt="">
                            </div>
                            <div class="swiper-slide">
                                <img src="{{ url('storage/asset_desa/asset_005.jpeg') }}"
                                    class="img-fluid rounded w-full" alt="">
                            </div>
                            <div class="swiper-slide">
                                <img src="{{ url('storage/asset_desa/asset_006.jpeg') }}"
                                    class="img-fluid rounded w-full" alt="">
                            </div>
                        </div>

                        <!-- If we need navigation buttons -->
                        <div class="swiper-button-prev text-white"></div>
                        <div class="swiper-button-next text-white"></div>
                    </div>
                </div>
            </div>
        </div>

    </section><!-- End Hero -->

    <main id="main">
        <!-- ======= Profile Section ======= -->
        <section id="profile" class="profile">
            <div class="container">

                <div class="section-title">
                    <h2>Profile</h2>
                </div>

                <div class="row content mb-5">
                    <iframe width="560" height="455" src="https://www.youtube.com/embed/H9B5f61xVro"
                        title="YouTube video player" frameborder="0"
                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                        allowfullscreen></iframe>
                </div>

                <div class="row content">
                    <div class="col-lg-6">
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                            labore et dolore
                            magna aliqua.
                        </p>
                        <ul>
                            <li><i class="ri-check-double-line"></i> Ullamco laboris nisi ut aliquip ex ea commodo
                                consequat</li>
                            <li><i class="ri-check-double-line"></i> Duis aute irure dolor in reprehenderit in voluptate
                                velit</li>
                            <li><i class="ri-check-double-line"></i> Ullamco laboris nisi ut aliquip ex ea commodo
                                consequat</li>
                        </ul>
                    </div>
                    <div class="col-lg-6 pt-4 pt-lg-0">
                        <p>
                            Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in
                            reprehenderit in voluptate
                            velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                            proident, sunt in
                            culpa qui officia deserunt mollit anim id est laborum.
                        </p>
                        <a href="#" class="btn-learn-more">Learn More</a>
                    </div>
                </div>

            </div>
        </section><!-- End Profile Section -->

        <!-- ======= Visi Misi Section ======= -->
        <section id="pricing" class="pricing section-bg">
            <div class="container">

                <div class="section-title">
                    <h2>Visi Misi</h2>
                    <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit
                        sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias
                        ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p>
                </div>

                <div class="row gx-5">

                    <div class="col-lg-6">
                        <div class="box mx-5">
                            <h4>Visi</h4>
                            <ul>
                                <li><i class="bx bx-chevron-right"></i> Quam adipiscing vitae proin</li>
                                <li><i class="bx bx-chevron-right"></i> Nec feugiat nisl pretium</li>
                                <li><i class="bx bx-chevron-right"></i> Nulla at volutpat diam uteera</li>
                                <li><i class="bx bx-chevron-right"></i> Pharetra massa massa ultricies</li>
                                <li><i class="bx bx-chevron-right"></i> Massa ultricies mi quis hendrerit</li>
                            </ul>
                        </div>
                    </div>

                    <div class="col-lg-6 mt-4 mt-lg-0">
                        <div class="box mx-5">
                            <h4>Misi</h4>
                            <ul>
                                <li><i class="bx bx-chevron-right"></i> Quam adipiscing vitae proin</li>
                                <li><i class="bx bx-chevron-right"></i> Nec feugiat nisl pretium</li>
                                <li><i class="bx bx-chevron-right"></i> Nulla at volutpat diam uteera</li>
                                <li><i class="bx bx-chevron-right"></i> Pharetra massa massa ultricies</li>
                                <li><i class="bx bx-chevron-right"></i> Massa ultricies mi quis hendrerit</li>
                            </ul>
                        </div>
                    </div>

                </div>

            </div>
        </section><!-- End Visi Misi Section -->

        <!-- ======= Graphic Section ======= -->
        <section id="graphic" class="graphic">
            <div class="container">

                <div class="section-title">
                    <h2>Grafik</h2>
                </div>

                <div class="row">
                    <div class="col-lg-6 mx-auto">
                        <canvas id="jenis_kelamin"></canvas>
                    </div>

                    <div class="col-lg-6 mx-auto">
                        <canvas id="jumlah_penduduk"></canvas>
                    </div>
                </div>
            </div>
        </section><!-- End Graphic Section -->
    </main>
</div>

@push('scripts')
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.3/Chart.min.js"></script>
    <script>
        var ctx = document.getElementById("jenis_kelamin").getContext('2d');
        var myChart = new Chart(ctx, {
            type: 'bar',
            data: {
                labels: ["2021", "2022"],
                datasets: [{
                        label: 'Laki-Laki',
                        data: [657, 660],
                        backgroundColor: 'rgba(255, 99, 132, 0.2)',
                        borderColor: 'rgba(255,99,132,1)',
                        borderWidth: 1
                    },
                    {
                        label: 'Perempuan',
                        data: [645, 654],
                        backgroundColor: 'rgba(54, 162, 235, 0.2)',
                        borderColor: 'rgba(54, 162, 235, 1)',
                        borderWidth: 1
                    },
                    {
                        label: 'Jumlah KK',
                        data: [408, 429],
                        backgroundColor: 'rgba(255, 206, 86, 0.2)',
                        borderColor: 'rgba(255, 206, 86, 1)',
                        borderWidth: 1
                    }
                ]
            },
            options: {
                scales: {
                    yAxes: [{
                        ticks: {
                            beginAtZero: true
                        }
                    }]
                },
                responsive: true,
                legend: {
                    position: 'bottom',
                },
                title: {
                    display: true,
                    text: 'Data Penduduk Berdasarkan Jenis Kelamin'
                }
            }
        });

        var ctx = document.getElementById("jumlah_penduduk").getContext('2d');
        var myChart = new Chart(ctx, {
            type: 'bar',
            data: {
                labels: ["2021", "2022"],
                datasets: [{
                        label: '0 - 12 bln',
                        data: [8, 12],
                        backgroundColor: 'rgba(255, 99, 132, 0.2)',
                        borderColor: 'rgba(255,99,132,1)',
                        borderWidth: 1
                    },
                    {
                        label: '1 - 5 thn',
                        data: [94, 98],
                        backgroundColor: 'rgba(54, 162, 235, 0.2)',
                        borderColor: 'rgba(54, 162, 235, 1)',
                        borderWidth: 1
                    },
                    {
                        label: '6 - 7 thn',
                        data: [49, 44],
                        backgroundColor: 'rgba(255, 206, 86, 0.2)',
                        borderColor: 'rgba(255, 206, 86, 1)',
                        borderWidth: 1
                    },
                    {
                        label: '8 - 15 thn',
                        data: [181, 188],
                        backgroundColor: 'rgba(75, 192, 192, 0.2)',
                        borderColor: 'rgba(75, 192, 192, 1)',
                        borderWidth: 1
                    },
                    {
                        label: '16 - 56 thn',
                        data: [619, 803],
                        backgroundColor: 'rgba(153, 102, 255, 0.2)',
                        borderColor: 'rgba(153, 102, 255, 1)',
                        borderWidth: 1
                    },
                    {
                        label: '> 56 thn',
                        data: [351, 169],
                        backgroundColor: 'rgba(255, 159, 64, 0.2)',
                        borderColor: 'rgba(255, 159, 64, 1)',
                        borderWidth: 1
                    },
                ]
            },
            options: {
                scales: {
                    yAxes: [{
                        ticks: {
                            beginAtZero: true
                        }
                    }]
                },
                responsive: true,
                legend: {
                    position: 'bottom',
                },
                title: {
                    display: true,
                    text: 'Data Penduduk Berdasarkan Usia'
                }
            }
        });
    </script>
@endpush
