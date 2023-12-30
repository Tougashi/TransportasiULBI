@extends('layouts.index')
@section('main')
    <div>
        <section class="section-bg section">
            <img src="{{ asset('assets/img/pages/bg4.png') }}" alt="Background Image" class="background-image">
            <div class="container pb-5 content">
                <br><br><br><br>
                <div class="row d-flex align-items-center">
                    <div class="col-lg-6 col-md-12 pb-lg-0 pt-sm-5 order-sm-2 order-lg-1 order-2 pb-2">
                        <h1 id="typewriter" class="fw-bolder text-light" style="font-size: 70px; font-family: 'Poppins';"></h1>
                        <p class="fw-bold fs-5 text-light pt-2">Gada Kite Barang Ga Sampe</p>
                        <a href="https://enroll.ulbi.ac.id/Pendaftaran"
                            class="btn btn-orange btn-outline-primary p-3 fs-5 mt-4 text-light">Daftar Sekarang <span class="ms-2">🚀</span></a>
                    </div>
                    <div class="col-lg-6 col-md-12 order-lg-2 order-sm-1 order-1 custom-frame">
                        <img src="{{ asset('assets/img/illustrations/banner.jpg') }}" class="img-fluid rounded enlarged-image"  alt="">
                    </div>
                </div>
            </div>

        </section>


        <section class="section section-lg">
            <div class="container-fluid">
                <div class="row justify-content-center mb-5 mb-lg-6 gap-4">
                    <h3 class="text-center fw-bold">Penerimaan Mahasiswa Baru</h3>
                    <div class="col-6 col-md-2 col-sm-4 text-center mb-4 ">
                        <a href="https://enroll.ulbi.ac.id/Pendaftaran" >
                            <div class="icon icon-shape icon-lg bg-white shadow-lg border-light rounded-circle mb-4">
                                <span class="bi bi-building-fill-add text-tertiary"></span>
                            </div>
                        </a>
                        <h5 class="fw-bolder">Gabung ULBI</h5>
                    </div>
                    <div class="col-6 col-md-2 col-sm-4 text-center mb-4">
                        <a
                            href="https://www.google.com/maps/place/Universitas+Logistik+dan+Bisnis+Internasional+(ULBI)/@-6.87455,107.5731249,17z/data=!3m1!4b1!4m6!3m5!1s0x2e68e7d1b68bb875:0xd8fcf5a9e43bd6e4!8m2!3d-6.87455!4d107.5756998!16s%2Fg%2F11t3f1g8pt?entry=ttu">
                            <div class="icon icon-shape icon-lg bg-white shadow-lg border-light rounded-circle mb-4">
                                <span class="bi bi-geo-alt-fill text-tertiary"></span>
                            </div>
                        </a>
                        <h5 class="fw-bolder">Lokasi Kampus</h5>
                    </div>
                    <div class="col-6 col-md-2 col-sm-4 text-center">
                        <a href="https://www.instagram.com/transportasi_ulbi/">
                            <div class="icon icon-shape icon-lg bg-white shadow-lg border-light rounded-circle mb-4">
                                <span class="bi bi-chat-dots-fill text-tertiary"></span>
                            </div>
                        </a>
                        <h5 class="fw-bolder">Konsultasi Online</h5>
                    </div>
                    <div class="col-6 col-md-2 col-sm-4 text-center">
                        <a href="https://admission.ulbi.ac.id/">
                            <div class="icon icon-shape icon-lg bg-white shadow-lg border-light rounded-circle mb-4">
                                <span class="bi bi-telephone-forward-fill text-tertiary"></span>
                            </div>
                        </a>
                        <h5 class="fw-bolder">Layanan ULBI</h5>
                    </div>
                    <div class="col-6 col-md-2 col-sm-4 text-center">
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
                    <div class="card shadow mb-5 bg-orange text-light bg-opacity-50 shadow-lg">
                        <div class="card-body p-5 text-md-left">
                            <div class="row text-center">
                                <div class="col-12 mb-2">
                                    <h3 class="fw-bolder text-light">PROGRAM STUDI S1 MANAJEMEN TRANSPORTASI</h3>
                                </div>
                                <div class="col-12">
                                    <h5 class="text-light">Program Studi S1 Manajemen Transportasi dibuka sejak 2013 sesuai
                                        Keputusan Menteri
                                        Pendidikan dan Kebudayaan No. 275/E/2013 yang ditandatangani oleh Menteri Pendidikan
                                        dan
                                        Kebudayaan. Saat ini Prodi Manajemen Transportasi memiliki Akreditasi B sesuai SK
                                        No.
                                        4977/SK/BAN-PT/Akred/S/XII/2017. PRODI S1 MANAJEMEN TRANSPORTASI merupakan program
                                        studi
                                        yang mempelajari tentang pengelolaan, perancangan, perbaikan, dan pengintegrasian
                                        sistem
                                        transportasi yang mencakup sarana, prasarana, rencana operasi, pemeliharaan dengan
                                        tujuan untuk menjamin pergerakan barang yang aman, cepat, mudah, ekonomis, dan ramah
                                        terhadap lingkungan.</h5>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="container-fluid">
                <h3 class="text-center fw-bolder mt-5 mb-4">Berita Terbaru</h3>
                <div class="row mt-5 gap-3 d-flex justify-content-center">
                    @forelse ($News as $article)
                    <div class="col-8 col-lg-3 col-md-8 mb-lg-0 m-0">
                        <div class="card shadow-sm">
                            <a href="/page/berita/{{ $article->slug }}">
                            <img src="{{asset('storage/' . $article->thumbnail)}}" class="card-img-top rounded-top" alt="Thumbnail">
                            <div class="card-body">
                                <h3 class="h5 card-title mt-3">{{$article->title}}</h3>
                                <p class="card-text">{!! $article->excerpt !!}</p>
                            </div>
                            </a>
                        </div>
                    </div>
                    @empty
                    <div class="col-12 text-center">
                        <div class="text-primary fw-bold h4 text-underline">Tidak ada Berita Terbaru</div>
                    </div>
                    @endforelse

                </div>
            </div>

            <div class="container-fluid pt-5">
                <h3 class="text-center fw-bolder mt-5 mb-4">Kegiatan Mahasiswa Prodi : S1 Manajemen Transportasi</h3>
                <div class="row mt-5 gap-3 d-flex justify-content-center">
                    @forelse ($Kegiatan as $kegiatan)
                    <div class="col-8 col-lg-3 col-md-8 mb-lg-0 m-0">
                        <div class="card shadow-sm">
                            <a href="/kegiatan/{{ $kegiatan->slug }}">
                            <img src="{{ asset('storage/' . $kegiatan->thumbnail) }}" class="card-img-top rounded-top" alt="Thumbnail">
                            <div class="card-body">
                                <h3 class="h5 card-title mt-3">{{$kegiatan->title}}</h3>
                                <p class="card-text">{!! $kegiatan->excerpt !!}</p>
                            </a>
                            </div>
                        </div>
                    </div>
                    @empty
                    <div class="col-12 text-center">
                        <div class="text-primary fw-bold h4 text-underline">Tidak ada Kegiatan Mahasiswa Terbaru</div>
                    </div>
                    @endforelse
                </div>
            </div>
        </section>

        <div class="container mt-5">
            <section class="my-calendar-section">
                <div class="card bg-orange">
                    <div class="card-header bg-orange text-white">
                        <div class="row">
                            <div class="col-md-6">
                                <h3 class="card-title mb-0 fw-bold">{{count($event) > 0 ? count($event) : ''}} Agenda | {{count($event) > 0 ? count($event) : ''}}  Pengumuman</h3>
                            </div>
                            {{-- <div class="col-md-6 d-flex justify-content-end">
                                <div class="btn-group " role="group">
                                    <button type="button" class="btn btn-sm btn-outline-primary text-white">Hari
                                        Ini</button>
                                    <button type="button" class="btn btn-sm btn-outline-primary text-white">Yang Akan
                                        Datang</button>
                                </div>
                            </div> --}}
                        </div>
                    </div>
                    <div class="card-body bg-primary py-5 rounded-bottom">
                        <div id="calendar">
                            <section class="section section-lg py-0">
                                <div class="container-fluid d-flex">
                                    <div class="row gap-3 d-flex justify-content-center">
                                        @forelse($pengumuman as $item)
                                        <div class="col-lg-5 col-md-6 col-sm-12">
                                            <div class="card shadow-sm">
                                                <div class="card-body">
                                                    <h3 class="h5 card-title py-2 border-bottom">
                                                        <i class="bi bi-calendar2-week-fill me-6"></i>{{$item->title}} |
                                                        <span class="text-orange">{{$item->category->category}}</span></h3>
                                                     <p class="card-text">{!! $item->date !!}</p>
                                                </div>
                                            </div>
                                        </div>
                                        @empty
                                        <div class="col-12">
                                            <div class="card shadow-sm">
                                                <div class="card-body">
                                                    <h3 class="h5 card-title py-2 border-bottom">Data Kosong</h3>
                                                </div>
                                            </div>
                                        </div>
                                        @endforelse
                                        @forelse ($event as $item)
                                        <div class="col-lg-5 col-md-6 col-sm-12">
                                            <div class="card shadow-sm">
                                                <div class="card-body">
                                                    <h3 class="h5 card-title py-2 border-bottom">
                                                        <i class="bi bi-calendar2-week-fill me-6"></i>{{$item->title}} |
                                                        <span class="text-orange">{{$item->category->category}}</span>
                                                    </h3>
                                                    <p class="card-text">{!! $item->date !!}</p>
                                                </div>
                                            </div>
                                        </div>
                                        @empty
                                            <!-- Konten jika $event kosong -->
                                        @endforelse
                                    </div>
                                </div>
                            </section>
                        </div>
                    </div>
                </div>
            </section>
        </div>
        <br><br><br>

        <section class="section section-lg pt-0 mb-3">
            <div class="container pb-5">
                <h4 class="text-center fw-bold mb-4">Video Profil ULBI</h4>
                <iframe class="rounded-pill mx-auto d-block img-fluid" style="height: 400px; width: 800px;"
                    src="https://www.youtube.com/embed/K6_kkg02Mac?rel=0&amp;showinfo=0&amp;autoplay=1"
                    title="YouTube video player" autoplay="1" frameborder="0"
                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                    allowfullscreen>
                </iframe>
            </div>
            <div class="container mt-5">
                <h3 class="text-center fw-bold pt-5 mb-4">Apa kata Mereka ?</h3>
                <div class="mySwiper2">
                    <div class="swiper-wrapper h-auto">
                        <div class="swiper-slide w-100">
                            <div class="card shadow">
                                <div class="card-body d-block">
                                    <p class="card-text">Kampus terbaik, mendidik lebih dari apa yang dibutuhkan di dunia
                                        kerja. Komitmen, kedisiplinan, tanggung jawab, leadership dan softskill lain yang
                                        telah diajarkan sejak kuliah sangat membantu saat kami telah lulus. Lulusan ULBI
                                        adalah lulusan siap pakai.</p>
                                    <h3 class="h5 card-title mt-3">Developer</h3>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide w-100">
                            <div class="card shadow">
                                <div class="card-body d-block">
                                    <p class="card-text">Kampus terbaik, mendidik lebih dari apa yang dibutuhkan di dunia
                                        kerja. Komitmen, kedisiplinan, tanggung jawab, leadership dan softskill lain yang
                                        telah diajarkan sejak kuliah sangat membantu saat kami telah lulus. Lulusan ULBI
                                        adalah lulusan siap pakai.</p>
                                    <h3 class="h5 card-title mt-3">Developer</h3>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide w-100">
                            <div class="card shadow">
                                <div class="card-body d-block">
                                    <p class="card-text">Kampus terbaik, mendidik lebih dari apa yang dibutuhkan di dunia
                                        kerja. Komitmen, kedisiplinan, tanggung jawab, leadership dan softskill lain yang
                                        telah diajarkan sejak kuliah sangat membantu saat kami telah lulus. Lulusan ULBI
                                        adalah lulusan siap pakai.</p>
                                    <h3 class="h5 card-title mt-3">Developer</h3>
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
                <div class="swiper-wrapper h-auto">
                    <div class="swiper-slide foto-dosen-slide">
                        <div class="card border-0 overflow-hidden text-light">
                            <div class="position-relative">
                                <img src="{{ asset('/assets/img/team/profile-picture-1.jpg') }}"
                                    class="card-img-top rounded" alt="Neil Portrait">
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
                                <img src="{{ asset('/assets/img/team/profile-picture-1.jpg') }}"
                                    class="card-img-top rounded" alt="Neil Portrait">
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
                                <img src="{{ asset('/assets/img/team/profile-picture-1.jpg') }}"
                                    class="card-img-top rounded" alt="Neil Portrait">
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
                                <img src="{{ asset('/assets/img/team/profile-picture-1.jpg') }}"
                                    class="card-img-top rounded" alt="Neil Portrait">
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
                                <img src="{{ asset('/assets/img/team/profile-picture-1.jpg') }}"
                                    class="card-img-top rounded" alt="Neil Portrait">
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
                                <img src="{{ asset('/assets/img/team/profile-picture-1.jpg') }}"
                                    class="card-img-top rounded" alt="Neil Portrait">
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
                                <img src="{{ asset('/assets/img/team/profile-picture-1.jpg') }}"
                                    class="card-img-top rounded" alt="Neil Portrait">
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
                                <img src="{{ asset('/assets/img/team/profile-picture-1.jpg') }}"
                                    class="card-img-top rounded" alt="Neil Portrait">
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
                                <img src="{{ asset('/assets/img/team/profile-picture-1.jpg') }}"
                                    class="card-img-top rounded" alt="Neil Portrait">
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





        <section class="section section-lg">
            <div class="container">
                <h3 class="text-center fw-bold">Mitra Kerja Sama Kampus BUMN - APERTI BUMN</h3>
                <div class="row pt-4 gap-4 text-center">
                    <div class="col-lg-4">
                        <img src="https://blogger.googleusercontent.com/img/a/AVvXsEgybM61IX0kYBlKr9ZgN0MB39MoDSvXGsTv_wQzdUy04swassDKbm7hQCSxYkeR6h-uCAmb8NR9jNC_SI3ykVZX-E1M-knL_7wjwzKieB43rUTwqvNTMXU9tSiTLGZUPyCKQnmBNFJZeRo8kOxiV2ih7mVqaFbN9SuZ3txkWzRY1jxdTIiMc1w7NXpn=s101"
                            class="me-1" alt="">
                        <img src="https://blogger.googleusercontent.com/img/a/AVvXsEjJWRh9WOJWUoPDsG4B6A63b7dWw5u-daMseMN3jf-GI5mJMxXHwaExMFIspKJFNQxoOmsAOrt1eMLwDtLurOJaQ7dkwOF9MmfHmBIlUrl5AaEYJX9JcLpDbtRR_LzeTUkauIcl-A7yB2JMWGr7zz2XotPztjs6s5U2Ki0uGZ-o88Z1TS6kX1-IuJEh=s101"
                            class="me-1" alt="">
                        <img src="https://blogger.googleusercontent.com/img/a/AVvXsEiPch0v4qJaIF5yUrLhTsrrQVMdF4Q3IbDpOiPK808j971moOgjggMAjKFXQ-SxqJr4d-4uBRAz5ev7fA0Xrv8I9vA7uVQgmhbc-jiZHuzlH9dJxr7xp1Cu2b1FUw5dFDnngcfZqzy8VREIn1JY0oQ63BYTfFWL5b7AoKWbTyajGInoThyGNWJ0ddIw=s101"
                            class="me-1" alt="">
                    </div>
                    <div class="col-lg-4">
                        <img src="https://blogger.googleusercontent.com/img/a/AVvXsEgX8T8hTKEQtGIwXHtCQOV7XfjBYzZtbD12eATAEcghOJqDcY0f2yoNBnm7DS2DTRxvv359RqNoHN3aa0U7pD5gxR9twq9I2fb0qSCdv1n5BMiEX8CED0WmLUTiMNvUuvyuBDvBmPz1MVy2SI8ZMc18CFerU7YNuGlkA_RIJcx5li8eX-WA4IEiks6C=s101"
                            class="me-1" alt="">
                        <img src="https://blogger.googleusercontent.com/img/a/AVvXsEh-BGqFRpEsddcsJRVaW9P777vLOIjc4SVVzi_rIqzvo3klMWswYYDNxi1ZzFd-vXg63RIFhfLwskm9vi70uxZP--amYIeoql0AnmtNpTKtJnQes4iupIJlqChUpghUVk25KA4TNHR9V9UDEgJ1t-LlhIQDAKlDE_rd4mgYhbniM7hJ2mx0mb34A1a5=s101"
                            class="me-1" alt="">
                        <img src="https://blogger.googleusercontent.com/img/a/AVvXsEhX_-Sg2Pz__02KwrzJRN6os09V2rIkvrwfs7__wROa1euIXlkt1pOWHmK7-X9GUYDn2sxKC1DHMK3UVrrSPhmQ7qCGgEftvUdpr2wioz0aSljQGpouboKTWxN2oV1R-3ez5mdsGU6KTib2_RJ4BY83OyU6MkUg93-RZEng2MV2fbHkEeXtBR0SvNkq=s101"
                            class="me-1" alt="">
                    </div>
                    <div class="col-lg-3">
                        <img src="https://blogger.googleusercontent.com/img/a/AVvXsEjtrvDkP2ymCa0GzVpVodX9LnH8FCJdwQugnAGHozx0agI6KQbIE27fYxNEddWgHqMKnd49MutEAooswpXu_Qx9d_5RYfgFLViynhtqRPtMq3qi2SVdNwCV61hHy1ufHL69D04DHVhwWxUpezwOWyghEHWttcOFUr_oWfXnjvIxoNUBkWDsTsnG1fwM=s101"
                            class="me-1" alt="">
                        <img src="https://blogger.googleusercontent.com/img/a/AVvXsEi9OMXbTbj4kX3valy6EFjSExDXZxUqM5GOzcmOToHKjYRyuJVEDUn513tqIs0cG793AGct7uTIp2aWDzv2GQu0GFq8K1YHGzqFgovqZE1yEE8Y4UJVnFLDmBzlgjgx1dA9FLkNe5ORgc1JK9vc03Jmk5DRCEuYp8RdT682Iqf7mQW05iW-zM1NFwtR=s101"
                            class="me-1" alt="">
                    </div>
                </div>
            </div>
        </section>

    </div>
@endsection

<script>
    const text = "Manajemen Transportasi";
    let index = 0;

    function typeWriter() {
        document.getElementById("typewriter").textContent += text[index];
        index++;

        if (index < text.length) {
            setTimeout(typeWriter, 40); // Sesuaikan kecepatan ketik di sini (dalam milidetik)
        }
    }

    // Panggil fungsi typewriter saat halaman dimuat
    window.onload = function() {
        typeWriter();
    };
</script>
@push('scripts')
    <script>
        var swiper = new Swiper(".mySwiper", {
            slidesPerView: 3,
            spaceBetween: 30,
            freeMode: true,
            pagination: {
                el: ".swiper-pagination",
                clickable: true,
            },
            autoplay: {
                delay: 2000,
            }
        });

        var swiper2 = new Swiper(".mySwiper2", {
            slidesPerView: 1,
            spaceBetween: 30,
            freeMode: true,
            pagination: {
                el: ".swiper-pagination",
                clickable: true,
            },
            autoplay: {
                delay: 4000,
            }
        });
    </script>
@endpush
