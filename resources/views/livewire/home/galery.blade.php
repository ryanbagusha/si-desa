<div>
    <main id="main">

        <!-- ======= Breadcrumbs ======= -->
        <div style="height: 72px;background: rgba(40, 58, 90, 0.9);" class=""></div>
        <section class="breadcrumbs">
            <div class="container">

                <ol>
                    <li><a href="{{ route('home') }}">Home</a></li>
                    <li>Galeri</li>
                </ol>
                <h2>Galeri</h2>

            </div>
        </section><!-- End Breadcrumbs -->

        <section id="galeri" class="galeri">

            <div class="container">
                <div class="row row-cols-2 row-cols-lg-4">
                    @foreach ($galleries as $gallery)
                        <div class="col mb-4">
                            <div class="hover-img">
                                <a href="{{ route('show-galeri', ['id' => $gallery->id]) }}">
                                    <img src="{{ $gallery->getFirstMedia('gallery')->getUrl() }}"
                                        class="img-fluid rounded w-full image" alt="{{ $gallery->title }}"
                                        width="300" height="200"
                                        style="width: 300px; height: 200px; object-fit: cover; object-position: 100% 0;">
                                    <div class="overlay">
                                        <div class="text">{{ $gallery->title }}</div>
                                    </div>
                                </a>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>

        </section>
    </main>
</div>
