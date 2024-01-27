<header class="header-global">
    <nav id="navbar-main" aria-label="Primary navigation"
        class="navbar navbar-main navbar-expand-lg bg-light headroom p-0 shadow">
        <div class="container position-relative p-0">
            <a class="navbar-brand me-lg-6" href="/">
                <img class="navbar-brand-dark ulbi-nav-logo"
                    src="{{ asset('assets/img/brand/Fakultas _ S1 Manajemen Transportasi.png') }}" alt="Logo light">
                {{-- <img class="navbar-brand-light" src="{{asset('/assets/img/brand/dark.svg')}}" alt="Logo dark"> --}}
            </a>
            <div class="navbar-collapse collapse me-auto" id="navbar_global">
                <div class="navbar-collapse-header">
                    <div class="row">
                        <div class="col-6 collapse-brand">
                            <a href="#">
                                <img src="{{ asset('assets/img/brand/Fakultas _ S1 Manajemen Transportasi.png') }}" alt="Logo light">
                            </a>
                        </div>
                        <div class="col-6 collapse-close">
                            <a href="#navbar_global" class="fas fa-times" data-bs-toggle="collapse"
                                data-bs-target="#navbar_global" aria-controls="navbar_global" aria-expanded="false"
                                title="close" aria-label="Toggle navigation"></a>
                        </div>
                    </div>
                </div>
                <ul class="navbar-nav navbar-nav-hover align-items-lg-center ms-auto me-4">
                    <li class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle {{$NavbarTitle == 'Profil' || $NavbarTitle == 'Visi & Misi' || $NavbarTitle == 'Struktur Organisasi' || $NavbarTitle == 'Keunikan Prodi' || $NavbarTitle == 'Akreditasi Prodi' || $NavbarTitle == 'Profil Lulusan' || $NavbarTitle == 'Gelar Lulusan' || $NavbarTitle == 'Kompetensi Lulusan' || $NavbarTitle == 'Metode Pembelajaran' ? 'text-orange' : ''}}" id="frontPagesDropdown" aria-expanded="false" data-bs-toggle="dropdown">
                            Tentang Prodi
                            <span class="fas fa-angle-down nav-link-arrow ms-1"></span>
                        </a>
                        <div class="dropdown-menu px-0" aria-labelledby="frontPagesDropdown">
                            <ul class="list-style-none mb-4">
                                <li class="mb-1 megamenu-item p-2 {{$NavbarTitle == 'Profil' ? 'bg-orange-prodi' : ''}}">
                                    <a class="megamenu-link {{$NavbarTitle == 'Profil' ? 'text-light' : ''}}"
                                        href="/page/profil-transportasi-ulbi">Profil</a>
                                </li>
                                <li class="mb-1 megamenu-item p-2 {{$NavbarTitle == 'Visi & Misi' ? 'bg-orange-prodi' : ''}}">
                                    <a class="megamenu-link {{$NavbarTitle == 'Visi & Misi' ? 'text-light' : ''}}"
                                        href="/page/visi-misi">Visi & Misi</a>
                                </li>
                                <li class="mb-1 megamenu-item p-2 {{$NavbarTitle == 'Struktur Organisasi' ? 'bg-orange-prodi' : ''}}">
                                    <a class="megamenu-link {{$NavbarTitle == 'Struktur Organisasi' ? 'text-light' : ''}}"
                                        href="/page/struktur-organisasi">Struktur Organisasi</a>
                                </li>
                                <li class="mb-1 megamenu-item p-2 {{$NavbarTitle == 'Keunikan Prodi' ? 'bg-orange-prodi' : ''}}">
                                    <a class="megamenu-link {{$NavbarTitle == 'Keunikan Prodi' ? 'text-light' : ''}}"
                                        href="/page/keunikan-prodi">Keunikan Prodi</a>
                                </li>
                                <li class="mb-1 megamenu-item p-2 {{$NavbarTitle == 'Akreditasi Prodi' ? 'bg-orange-prodi' : ''}}">
                                    <a class="megamenu-link {{$NavbarTitle == 'Akreditasi Prodi' ? 'text-light' : ''}}"
                                        href="/page/akreditasi-prodi">Akreditasi Prodi</a>
                                </li>
                                <li class="mb-1 megamenu-item p-2 {{$NavbarTitle == 'Profil Lulusan' ? 'bg-orange-prodi' : ''}}">
                                    <a class="megamenu-link {{$NavbarTitle == 'Profil Lulusan' ? 'text-light' : ''}}"
                                        href="/page/profil-lulusan">Profil Lulusan</a>
                                </li>
                                <li class="mb-1 megamenu-item p-2 {{$NavbarTitle == 'Gelar Lulusan' ? 'bg-orange-prodi' : ''}}">
                                    <a class="megamenu-link {{$NavbarTitle == 'Gelar Lulusan' ? 'text-light' : ''}}"
                                        href="/page/gelar-lulusan">Gelar Lulusan</a>
                                </li>
                                <li class="mb-1 megamenu-item p-2 {{$NavbarTitle == 'Kompetensi Lulusan' ? 'bg-orange-prodi' : ''}}">
                                    <a class="megamenu-link {{$NavbarTitle == 'Kompetensi Lulusan' ? 'text-light' : ''}}"
                                        href="/page/kompetensi-lulusan">Kompetensi Lulusan</a>
                                </li>
                                <li class="mb-1 megamenu-item p-2 {{$NavbarTitle == 'Metode Pembelajaran' ? 'bg-orange-prodi' : ''}}">
                                    <a class="megamenu-link {{$NavbarTitle == 'Metode Pembelajaran' ? 'text-light' : ''}}"
                                        href="/page/metode-pembelajaran">Metode Pembelajaran</a>
                                </li>
                            </ul>
                        </div>

                    </li>
                    <li class="nav-item dropdown">
                        <a href="/page/daftar-mata-kuliah-kurikulum" class="nav-link {{$NavbarTitle == 'Kurikulum & MK Unggulan' ? 'text-orange' : ''}}" aria-expanded="false">
                            Kurikulum & MK Unggulan
                        </a>
                    </li>
                    <li class="nav-item dropdown">
                        <a href="/page/profil-dosen-prodi" class="nav-link {{$NavbarTitle == 'Profil Dosen' ? 'text-orange' : ''}}" aria-expanded="false">
                            Dosen
                        </a>
                    </li>
                    <li class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle {{$NavbarTitle == 'Organisasi Mahasiswa' || $NavbarTitle == 'Sarana Prasarana'}}" id="fasilitasDropdown" aria-expanded="false"
                            data-bs-toggle="dropdown">
                            Kemahasiswaan
                            <span class="fas fa-angle-down nav-link-arrow ms-1"></span>
                        </a>
                        <div class="dropdown-menu px-0" aria-labelledby="fasilitasDropdown">
                            <ul class="list-style-none mb-4">
                            <li class="mb-1 megamenu-item p-2">
                                    <a class="megamenu-link"
                                        href="/page/himpunan">Himpunan Transportasi</a>
                                </li>
                                <li class="mb-1 megamenu-item p-2 {{$NavbarTitle == 'Organisasi Mahasiswa' ? 'bg-orange-prodi' : ''}}">
                                    <a class="megamenu-link {{$NavbarTitle == 'Organisasi Mahasiswa' ? 'text-light' : ''}}"
                                        href="/page/kegiatan-himpunan">Kegiatan Himpunan</a>
                                </li>
                                <li class="mb-1 megamenu-item p-2 {{$NavbarTitle == 'Sarana Prasarana' ? 'bg-orange-prodi' : ''}}">
                                    <a class="megamenu-link {{$NavbarTitle == 'Sarana Prasarana' ? 'text-light' : ''}}"
                                        href="https://www.instagram.com/himaporta/">Instagram Himpunan</a>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <li class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle {{$NavbarTitle == 'Penerimaan Mahasiswa Baru' || $NavbarTitle == 'Sistem Informasi Akademik' || $NavbarTitle == 'Virtual Learning' || $NavbarTitle == 'E - Jurnal' ? 'text-orange' : ''}}" id="layananDropdown" aria-expanded="false"
                            data-bs-toggle="dropdown">
                            Layanan
                            <span class="fas fa-angle-down nav-link-arrow ms-1"></span>
                        </a>
                        <div class="dropdown-menu px-0" aria-labelledby="layananDropdown">
                            <ul class="list-style-none mb-4">
                                <li class="mb-1 megamenu-item p-2 {{$NavbarTitle == 'Penerimaan Mahasiswa Baru' ? 'bg-orange-prodi' : ''}}">
                                    <a class="megamenu-link {{$NavbarTitle == 'Penerimaan Mahasiswa Baru' ? 'text-light' : ''}}"
                                        href="/page/penerimaan-mahasiswa-baru">Penerimaan Mahasiswa Baru</a>
                                </li>
                                <li class="mb-1 megamenu-item p-2 {{$NavbarTitle == 'Sistem Informasi Akademik' ? 'bg-orange-prodi' : ''}}">
                                    <a class="megamenu-link {{$NavbarTitle == 'Sistem Informasi Akademik' ? 'text-light' : ''}}"
                                        href="/page/sistem-informasi-akademik">Sistem Informasi Akademik</a>
                                </li>
                                <li class="mb-1 megamenu-item p-2 {{$NavbarTitle == 'Virtual Learning' ? 'bg-orange-prodi' : ''}}">
                                    <a class="megamenu-link {{$NavbarTitle == 'Virtual Learning' ? 'text-light' : ''}}"
                                        href="/page/virtual-learning">Virtual Learning (VL)</a>
                                </li>
                                <li class="mb-1 megamenu-item p-2 {{$NavbarTitle == 'E - Jurnal' ? 'bg-orange-prodi' : ''}}">
                                    <a class="megamenu-link {{$NavbarTitle == 'E - Jurnal' ? 'text-light' : ''}}"
                                        href="/page/e-jurnal">E - Jurnal</a>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <li class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle {{$NavbarTitle == 'Kerjasama Luar Negeri' || $NavbarTitle == 'Kerjasama Dalam Negeri' || $NavbarTitle == 'MBKM & Student Exchange' ? 'text-orange' : ''}}" id="kerjasamaDropdown" aria-expanded="false"
                            data-bs-toggle="dropdown">
                            Kerjasama
                            <span class="fas fa-angle-down nav-link-arrow ms-1"></span>
                        </a>
                        <div class="dropdown-menu px-0" aria-labelledby="kerjasamaDropdown">
                            <ul class="list-style-none mb-4">
                                <li class="mb-1 megamenu-item p-2 {{$NavbarTitle == 'Kerjasama Luar Negeri' ? 'bg-orange-prodi' : ''}}">
                                    <a class="megamenu-link {{$NavbarTitle == 'Kerjasama Luar Negeri' ? 'text-light' : ''}}"
                                        href="/page/kerjasama-luar-negeri">Kerjasama Luar Negeri</a>
                                </li>
                                <li class="mb-1 megamenu-item p-2 {{$NavbarTitle == 'Kerjasama Dalam Negeri' ? 'bg-orange-prodi' : ''}}">
                                    <a class="megamenu-link {{$NavbarTitle == 'Kerjasama Dalam Negeri' ? 'text-light' : ''}}"
                                        href="/page/kerjasama-dalam-negeri">Kerjasama Dalam Negeri</a>
                                </li>
                                <li class="mb-1 megamenu-item p-2 {{$NavbarTitle == 'MBKM & Student Exchange' ? 'bg-orange-prodi' : ''}}">
                                    <a class="megamenu-link {{$NavbarTitle == 'MBKM & Student Exchange' ? 'text-light' : ''}}"
                                        href="/page/mbkm-student-exchange">MBKM & Student Exchange</a>
                                </li>
                            </ul>
                        </div>
                    </li>
                </ul>
            </div>
            <div class="d-flex align-items-center gap-2">
                <i class="bi bi-search text-orange fs-5" id="search-button-nav" onclick="showSearchModal()"></i>
                <button class="navbar-toggler ms-2" type="button" data-bs-toggle="collapse" data-bs-target="#navbar_global" aria-controls="navbar_global" aria-expanded="false" aria-label="Toggle navigation">
                    <i class="bi bi-list text-orange fs-3"></i>
                </button>
            </div>
        </div>
    </nav>
</header>
@push('scripts')
    <script>
        function showSearchModal() {
            $('#modal-search-navbar').modal('show');
        }
    </script>

@endpush

