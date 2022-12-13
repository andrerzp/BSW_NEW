    @extends('layouts.index')
    @section('content')
        <!-- hero slider -->
        <section class="hero-section bg-cover" data-background="{{ asset('assets/images/slide-1.jpg') }}">
            <h1 class="bold text-white"><br><br>Dengan Aplikasi BSW<br> Kini Pengajuan Perijinan <br> Bisa Dilakukan Secara Online<br><br> </h1>
            <div class="container">
                <div class="hero-slider">
                    <div class="row">
                        <div class="col-md-8">
                            <h1 class="title-slider text-white" data-animation-out="fadeOutRight" data-delay-out="5" data-duration-in=".3" data-animation-in="fadeInLeft" data-delay-in=".1">
                            </h1>
                        </div>
                    </div>
                </div>
                <!-- slider item -->
            </div>
            </div>
        </section>
        <!-- /hero slider -->

        <!-- About-->
        <section class="section-sm">
            <div class="container" data-aos="fade-up">
                <div class="row">
                    <div class="col-12">
                        <div class="d-flex align-items-center section-title justify-content-center">
                            <h2 class="mb-0 text-nowrap me-3">Tentang BSW</h2>
                        </div>
                        <div class="col-15">
                            <div class="d-flex align-items-center section-title justify-content-center">
                                <p>
                                    Portal Batam Single Window (http://www.bsw.bpbatam.go.id) merupakan portal perijinan resmi yang dikembangkan oleh Badan Pengusahaan Kawasan Batam (BP Batam).
                                    Dengan mengakses portal ini, pengunjung akan mendapatkan informasi tentang prosedur resmi dan tata cara yang diperlukan dalam mengajukan perijinan yang dikelola oleh BP Batam.</p>
                            </div>
                        </div>
                        <div style="padding-top: 30px; text-align: center;">
                            <a href="{{ route('home') }}" class="btn-selengkapnya my-auto"><span
                                    class="fas fa-angle-right mx-1"></span> SELENGKAPNYA</a>
                        </div>
                    </div>
                    </div>
                </div>
            </div>
            <!-- course list -->
                <div class="row justify-content-between">
                    <!-- course item -->
                    <div class="col-lg-6 col-md-6 mb-3 position-relative">
                        <iframe width="100%" height="310" src=""
                                title="YouTube video player" frameborder="0"
                                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                                allowfullscreen></iframe>
                    </div>
                    <div class="col-lg-6 col-md-6 mb-3 position-relative">
                        <iframe width="100%" height="310" src=""
                                title="YouTube video player" frameborder="0"
                                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                                allowfullscreen></iframe>
                    </div>
                </div>
            </div>
        </section>

    @endsection

    @push('script')
        <script>
            AOS.init();
        </script>
    @endpush
