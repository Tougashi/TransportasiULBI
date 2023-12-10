@extends('layouts.index')
@section('main')
    <div>
        {{-- <div class="preloader bg-orange flex-column justify-content-center align-items-center">
            <svg id="loader-logo" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 64 78.4">
                <img src="{{ asset('assets/img/carousel/image-1.jpg') }}" style="margin-bottom: 25%;" id="loader-logo-image"
                    alt="">
            </svg>
        </div> --}}
        <section class="section-header overflow-hidden pt-7 pt-lg-8 pb-9 pb-lg-12 bg-primary text-white">
            <div class="container">
                <div class="row">
                    <div class="col-12 text-center">
                        <div class="bootstrap-big-icon d-none d-lg-block">
                            {{-- <img class="" src="{{ asset('assets/img/brand/Fakultas _ S1 Manajemen Transportasi.png') }}" alt="" /> --}}
                        </div>
                        <br><br>
                        <h1 class="fw-bolder display-2">TRANSPORTASI</h1>
                        <h2 class="lead fw-normal  mb-4 px-lg-10">UNIVERSITAS LOGISTIK & BISNIS INTERNASIONAL</h2>
                        {{-- <div class="d-flex justify-content-center flex-column mb-6 mb-lg-5">
                            <a href="https://themesberg.com" class="d-block text-center mx-auto" target="_blank">
                                <img src="./assets/img/themesberg.svg" class="d-block mx-auto mb-3" height="25"
                                    width="25" alt="Themesberg Logo">
                                <span class="text-muted font-small">A Themesberg production</span>
                            </a>
                        </div> --}}
                    </div>
                </div>
            </div>
            <figure class="position-absolute bottom-0 left-0 w-100 d-none d-md-block mb-n2"><svg class="fill-white"
                    xmlns="http://www.w3.org/2000/svg" viewBox="0 0 3000 185.4">
                    <path d="M3000,0v185.4H0V0c496.4,115.6,996.4,173.4,1500,173.4S2503.6,115.6,3000,0z"></path>
                </svg></figure>
        </section>

        <div class="section py-0">
            <div class="container mt-n10 mt-lg-n12 z-2">
                <div class="row justify-content-center">
                    <div class="col-12 col-md-10">
                        <img src="./assets/img/presentation-mockup.png" alt="Pixel Free Mockup">
                    </div>
                </div>
            </div>
        </div>

        <section class="section section-lg">
            <div class="container-fluid">
                <div class="row justify-content-center mb-5 mb-lg-6 gap-4">
                    <h3 class="text-center fw-bold">Penerimaan Mahasiswa Baru</h3>
                    <div class="col-6 col-md-2 text-center mb-4">
                        <a href="https://enroll.ulbi.ac.id/Pendaftaran">
                        <div class="icon icon-shape icon-lg bg-white shadow-lg border-light rounded-circle mb-4">
                            <span class="bi bi-building-fill-add text-tertiary"></span>
                        </div>
                        </a>
                        <h5 class="fw-bolder">Gabung ULBI</h5>
                    </div>
                    <div class="col-6 col-md-2 text-center mb-4">
                        <a href="https://www.google.com/maps/place/Universitas+Logistik+dan+Bisnis+Internasional+(ULBI)/@-6.87455,107.5731249,17z/data=!3m1!4b1!4m6!3m5!1s0x2e68e7d1b68bb875:0xd8fcf5a9e43bd6e4!8m2!3d-6.87455!4d107.5756998!16s%2Fg%2F11t3f1g8pt?entry=ttu">
                        <div class="icon icon-shape icon-lg bg-white shadow-lg border-light rounded-circle mb-4">
                            <span class="bi bi-geo-alt-fill text-tertiary"></span>
                        </div>
                        </a>
                        <h5 class="fw-bolder">Lokasi Kampus</h5>
                    </div>
                    <div class="col-6 col-md-2 text-center">
                        <a href="https://www.instagram.com/transportasi_ulbi/">
                        <div class="icon icon-shape icon-lg bg-white shadow-lg border-light rounded-circle mb-4">
                            <span class="bi bi-chat-dots-fill text-tertiary"></span>
                        </div>
                        </a>
                        <h5 class="fw-bolder">Konsultasi Online</h5>
                    </div>
                    <div class="col-6 col-md-2 text-center">
                        <a href="https://admission.ulbi.ac.id/">
                        <div class="icon icon-shape icon-lg bg-white shadow-lg border-light rounded-circle mb-4">
                            <span class="bi bi-telephone-forward-fill text-tertiary"></span>
                        </div>
                        </a>
                        <h5 class="fw-bolder">Layanan ULBI</h5>
                    </div>
                    <div class="col-6 col-md-2 text-center">
                        <a href="mailto:s1-transportasi@ulbi.ac.id">
                        <div class="icon icon-shape icon-lg bg-white shadow-lg border-light rounded-circle mb-4">
                            <span class="bi bi-envelope-arrow-up-fill text-tertiary"></span>
                        </div>
                        </a>
                        <h5 class="fw-bolder">Kirim Pesan</h5>
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="col-12 pb-5">
                    <div class="card shadow mb-5 bg-orange-prodi text-light bg-opacity-50 shadow">
                        <div class="card-body p-5 text-md-left">
                            <div class="row text-center">
                                <div class="col-12 mb-2">
                                    <h3 class="fw-bolder text-light">PROGRAM STUDI S1 MANAJEMEN TRANSPORTASI</h3>
                                </div>
                                <div class="col-12 text-light">
                                    Program Studi S1 Manajemen Transportasi dibuka sejak 2013 sesuai Keputusan Menteri
                                    Pendidikan dan Kebudayaan No. 275/E/2013 yang ditandatangani oleh Menteri Pendidikan dan
                                    Kebudayaan. Saat ini Prodi Manajemen Transportasi memiliki Akreditasi B sesuai SK No.
                                    4977/SK/BAN-PT/Akred/S/XII/2017. PRODI S1 MANAJEMEN TRANSPORTASI merupakan program studi
                                    yang mempelajari tentang pengelolaan, perancangan, perbaikan, dan pengintegrasian sistem
                                    transportasi yang mencakup sarana, prasarana, rencana operasi, pemeliharaan dengan
                                    tujuan untuk menjamin pergerakan barang yang aman, cepat, mudah, ekonomis, dan ramah
                                    terhadap lingkungan.
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="">
                <h3 class="text-center fw-bolder mt-5 mb-4">Berita Terbaru</h3>
                <div class="row mt-5 gap-3 d-flex justify-content-center">
                    <div class="col-12 col-lg-3 col-md-4 mb-lg-0 m-0">
                        <div class="card shadow-sm">
                            <img src="{{ asset('/assets/img/blog/image-1.jpg') }}" class="card-img-top rounded-top"
                                alt="Themesberg office">
                            <div class="card-body">
                                <h3 class="h5 card-title mt-3">We partnered up with Google</h3>
                                <p class="card-text">Some quick example text to build on the card title and make up the bulk
                                    of
                                    the card's content.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-lg-3 col-md-4 mb-lg-0">
                        <div class="card shadow-sm">
                            <img src="{{ asset('/assets/img/blog/image-1.jpg') }}" class="card-img-top rounded-top"
                                alt="Themesberg office">
                            <div class="card-body">
                                <h3 class="h5 card-title mt-3">We partnered up with Google</h3>
                                <p class="card-text">Some quick example text to build on the card title and make up the bulk
                                    of
                                    the card's content.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-lg-3 col-md-4 mb-lg-0">
                        <div class="card shadow-sm">
                            <img src="{{ asset('/assets/img/blog/image-1.jpg') }}" class="card-img-top rounded-top"
                                alt="Themesberg office">
                            <div class="card-body">
                                <h3 class="h5 card-title mt-3">We partnered up with Google</h3>
                                <p class="card-text">Some quick example text to build on the card title and make up the bulk
                                    of
                                    the card's content.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-lg-3 col-md-4 mb-lg-0">
                        <div class="card shadow-sm">
                            <img src="{{ asset('/assets/img/blog/image-1.jpg') }}" class="card-img-top rounded-top"
                                alt="Themesberg office">
                            <div class="card-body">
                                <h3 class="h5 card-title mt-3">We partnered up with Google</h3>
                                <p class="card-text">Some quick example text to build on the card title and make up the bulk
                                    of
                                    the card's content.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="section section-lg pt-0 mb-3">
            <div class="container">
                <div class="row gap-5">
                    <div class="col-lg-5 col-md-12">
                        <h4>Video Profil ULBI</h4>
                        <iframe class="w-100 h-100" src="https://www.youtube.com/embed/K6_kkg02Mac?rel=0&amp;showinfo=0&amp;autoplay=1" title="YouTube video player" autoplay="1" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                    </div>
                    <div class="col-lg-6 col-md-12 col-12">
                        <h4>Testimoni</h4>
                        <div class="mySwiper">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide w-100">
                                    <div class="card shadow">
                                        <div class="card-body d-block">
                                            <p class="card-text">Kampus terbaik, mendidik lebih dari apa yang dibutuhkan di dunia kerja. Komitmen, kedisiplinan, tanggung jawab, leadership dan softskill lain yang telah diajarkan sejak kuliah sangat membantu saat kami telah lulus. Lulusan ULBI adalah lulusan siap pakai.</p>
                                            <h3 class="h5 card-title mt-3">Developer</h3>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide w-100">
                                    <div class="card shadow">
                                        <div class="card-body d-block">
                                            <p class="card-text">Kampus terbaik, mendidik lebih dari apa yang dibutuhkan di dunia kerja. Komitmen, kedisiplinan, tanggung jawab, leadership dan softskill lain yang telah diajarkan sejak kuliah sangat membantu saat kami telah lulus. Lulusan ULBI adalah lulusan siap pakai.</p>
                                            <h3 class="h5 card-title mt-3">Developer</h3>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide w-100">
                                    <div class="card shadow">
                                        <div class="card-body d-block">
                                            <p class="card-text">Kampus terbaik, mendidik lebih dari apa yang dibutuhkan di dunia kerja. Komitmen, kedisiplinan, tanggung jawab, leadership dan softskill lain yang telah diajarkan sejak kuliah sangat membantu saat kami telah lulus. Lulusan ULBI adalah lulusan siap pakai.</p>
                                            <h3 class="h5 card-title mt-3">Developer</h3>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="section section-lg pt-0">
            <h3 class="text-center fw-bold">Dosen Prodi S1 Manajemen Transportasi</h3>
            <div class="container mt-5 mySwiper">
                <div class="swiper-wrapper">
                    <div class="swiper-slide foto-dosen-slide">
                        <div class="card border-0 overflow-hidden text-light">
                            <div class="position-relative">
                                <img src="{{asset('/assets/img/team/profile-picture-1.jpg')}}" class="card-img-top rounded"
                                    alt="Neil Portrait">
                            </div>
                            <div class="card-body position-relative mt-n6 mx-2 bg-orange text-center rounded">
                                <h3 class="h5 card-title text-light">Neil D. Sims</h3>
                                <p class="mt-3">Neil drives the technical strategy of the platform and brand.</p>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide foto-dosen-slide">
                        <div class="card border-0 overflow-hidden text-light">
                            <div class="position-relative">
                                <img src="{{asset('/assets/img/team/profile-picture-1.jpg')}}" class="card-img-top rounded"
                                    alt="Neil Portrait">
                            </div>
                            <div class="card-body position-relative mt-n6 mx-2 bg-orange text-center rounded">
                                <h3 class="h5 card-title text-light">Neil D. Sims</h3>
                                <p class="mt-3">Neil drives the technical strategy of the platform and brand.</p>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide foto-dosen-slide">
                        <div class="card border-0 overflow-hidden text-light">
                            <div class="position-relative">
                                <img src="{{asset('/assets/img/team/profile-picture-1.jpg')}}" class="card-img-top rounded"
                                    alt="Neil Portrait">
                            </div>
                            <div class="card-body position-relative mt-n6 mx-2 bg-orange text-center rounded">
                                <h3 class="h5 card-title text-light">Neil D. Sims</h3>
                                <p class="mt-3">Neil drives the technical strategy of the platform and brand.</p>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide foto-dosen-slide">
                        <div class="card border-0 overflow-hidden text-light">
                            <div class="position-relative">
                                <img src="{{asset('/assets/img/team/profile-picture-1.jpg')}}" class="card-img-top rounded"
                                    alt="Neil Portrait">
                            </div>
                            <div class="card-body position-relative mt-n6 mx-2 bg-orange text-center rounded">
                                <h3 class="h5 card-title text-light">Neil D. Sims</h3>
                                <p class="mt-3">Neil drives the technical strategy of the platform and brand.</p>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide foto-dosen-slide">
                        <div class="card border-0 overflow-hidden text-light">
                            <div class="position-relative">
                                <img src="{{asset('/assets/img/team/profile-picture-1.jpg')}}" class="card-img-top rounded"
                                    alt="Neil Portrait">
                            </div>
                            <div class="card-body position-relative mt-n6 mx-2 bg-orange text-center rounded">
                                <h3 class="h5 card-title text-light">Neil D. Sims</h3>
                                <p class="mt-3">Neil drives the technical strategy of the platform and brand.</p>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide foto-dosen-slide">
                        <div class="card border-0 overflow-hidden text-light">
                            <div class="position-relative">
                                <img src="{{asset('/assets/img/team/profile-picture-1.jpg')}}" class="card-img-top rounded"
                                    alt="Neil Portrait">
                            </div>
                            <div class="card-body position-relative mt-n6 mx-2 bg-orange text-center rounded">
                                <h3 class="h5 card-title text-light">Neil D. Sims</h3>
                                <p class="mt-3">Neil drives the technical strategy of the platform and brand.</p>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide foto-dosen-slide">
                        <div class="card border-0 overflow-hidden text-light">
                            <div class="position-relative">
                                <img src="{{asset('/assets/img/team/profile-picture-1.jpg')}}" class="card-img-top rounded"
                                    alt="Neil Portrait">
                            </div>
                            <div class="card-body position-relative mt-n6 mx-2 bg-orange text-center rounded">
                                <h3 class="h5 card-title text-light">Neil D. Sims</h3>
                                <p class="mt-3">Neil drives the technical strategy of the platform and brand.</p>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide foto-dosen-slide">
                        <div class="card border-0 overflow-hidden text-light">
                            <div class="position-relative">
                                <img src="{{asset('/assets/img/team/profile-picture-1.jpg')}}" class="card-img-top rounded"
                                    alt="Neil Portrait">
                            </div>
                            <div class="card-body position-relative mt-n6 mx-2 bg-orange text-center rounded">
                                <h3 class="h5 card-title text-light">Neil D. Sims</h3>
                                <p class="mt-3">Neil drives the technical strategy of the platform and brand.</p>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide foto-dosen-slide">
                        <div class="card border-0 overflow-hidden text-light">
                            <div class="position-relative">
                                <img src="{{asset('/assets/img/team/profile-picture-1.jpg')}}" class="card-img-top rounded"
                                    alt="Neil Portrait">
                            </div>
                            <div class="card-body position-relative mt-n6 mx-2 bg-orange text-center rounded">
                                <h3 class="h5 card-title text-light">Neil D. Sims</h3>
                                <p class="mt-3">Neil drives the technical strategy of the platform and brand.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </section>

        <section class="section section-lg py-0">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-md-6 col-sm-12">
                        <div class="card shadow-sm">
                            <div class="card-body">
                                <h3 class="h5 card-title py-2 border-bottom"><i class="bi bi-calendar2-week-fill me-3"></i> Agenda ULBI</h3>
                                <p class="card-text">Some quick example text to build on the card title and make up the
                                    bulk of
                                    the card's content.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-12">
                        <div class="card shadow-sm">
                            <div class="card-body">
                                <h3 class="h5 card-title py-2 border-bottom"><i class="bi bi-info-circle-fill me-3"></i> Pengumuman ULBI</h3>
                                <p class="card-text">Some quick example text to build on the card title and make up the
                                    bulk of
                                    the card's content.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>


    </div>
@endsection
@section('scripts')
    <script>
        var swiper = new Swiper(".mySwiper", {
        slidesPerView: 3,
        spaceBetween: 30,
        freeMode: true,
        pagination: {
            el: ".swiper-pagination",
            clickable: true,
        },
        autoplay:{
            delay: 2000,
        }
        });
    </script>
@endsection
