<div>
    <main id="main">

        <!-- ======= Breadcrumbs ======= -->
        <div style="height: 72px;background: rgba(40, 58, 90, 0.9);" class=""></div>
        <section class="breadcrumbs">
            <div class="container">

                <ol>
                    <li><a href="{{ route('home') }}">Home</a></li>
                    <li><a href="{{ route('galeri') }}">Galeri</a></li>
                    <li>{{ $gallery->title }}</li>
                </ol>
                <h1 class="py-3">{{ $gallery->title }}</h1>

            </div>
        </section><!-- End Breadcrumbs -->

        <section id="galeri" class="galeri">
            <div class="container">
                <!-- Slider main container -->
                <div class="swiper">
                    <!-- Additional required wrapper -->
                    <div class="swiper-wrapper">
                        <!-- Slides -->
                        @foreach ($gallery->getMedia('gallery') as $image)
                            <div class="swiper-slide text-center">
                                <img src="{{ $image->getUrl() }}" class="img-fluid rounded w-full"
                                    alt="{{ $image->name }}" width="650" height="400"
                                    style="width: 650px; height: 400px; object-fit: cover; object-position: 100% 0;">
                            </div>
                        @endforeach
                    </div>

                    <!-- If we need navigation buttons -->
                    <div class="swiper-button-prev"></div>
                    <div class="swiper-button-next"></div>
                </div>
                <div class="my-5 font-lg">
                    {!! $gallery->content !!}
                </div>
            </div>
        </section>
    </main>
</div>
