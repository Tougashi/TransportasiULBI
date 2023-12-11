@extends('layouts.index')
@section('main')
<section class="section section-lg pb-1">
    <div class="container mb-3">
        <h3 class="text-center fw-bold">{{$NavbarTitle}} <br> Daftar Mata Kuliah Program Studi S1 Manajemen Transportasi</h3>
        <div class="row d-flex text-center">
            <div class="col-12">
                <img src="{{asset('assets/img/pages/K_231.png')}}" alt="" class="img-fluid rounded my-3">
            </div>
            <div class="col-12">
                <img src="{{asset('assets/img/pages/K_232.png')}}" alt="" class="img-fluid rounded my-3">
            </div>
            <div class="col-12">
                <img src="{{asset('assets/img/pages/K_233.png')}}" alt="" class="img-fluid rounded my-3">
            </div>
            <div class="col-12">
                <img src="{{asset('assets/img/pages/K_233.png')}}" alt="" class="img-fluid rounded my-3">
            </div>
            <div class="col-12">
                <img src="{{asset('assets/img/pages/MK_20pilihan.png')}}" alt="" class="img-fluid rounded my-3">
            </div>
        </div>
    </div>
    <div class="container-fluid px-0">
        <h3 class="text-center fw-bold mt-5 mb-4">Mata Kuliah Unggulan</h3>
        <div class="row gap-3 d-flex justify-content-center">
            <div class="col-12 col-md-6 col-lg-3 mb-5 mb-lg-0">
                <div class="card shadow" style="height: 300px;">
                    <div class="card-body">
                        <h3 class="h5 card-title fw-bolder mt-3">Perencanaan Sistem Transportasi</h3>
                        <p class="card-text">Tata Guna Lahan & Industri, Geografi Transportasi, Manajemen Rekayasa Lalu Lintas, Perencanaan & Pemodelan Transportasi</p>
                        <button class="btn bg-orange-prodi text-light btn-sm shadow" id="1" onclick="openMatkulUnggulanModal(this.id)">Learn More</button>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-6 col-lg-3 mb-5 mb-lg-0">
                <div class="card shadow" style="height: 300px;">
                    <div class="card-body">
                        <h3 class="h5 card-title fw-bolder mt-3">Ekonomi & Bisnis Transportasi</h3>
                        <p class="card-text">Analisis Biaya & Tarif Transportasi, Manajemen Bisnis Transportasi, Bisnis Digital Transportasi, Kewirausahaan</p>
                        <button class="btn bg-orange-prodi text-light btn-sm shadow" id="2" onclick="openMatkulUnggulanModal(this.id)">Learn More</button>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-6 col-lg-4 mb-5 mb-lg-0">
                <div class="card shadow" style="height: 300px;">
                    <div class="card-body">
                        <h3 class="h5 card-title fw-bolder mt-3">Operasi Transportasi</h3>
                        <p class="card-text">Sistem Operasi Prasarana (Bandar Udara, Pelabuhan), Manajemen Operasi Sarana (Truk, Kereta Api, Laut, Udara), Sistem Distribusi, Supply Chain Management, Manajemen Postal</p>
                        <button class="btn bg-orange-prodi text-light btn-sm shadow" id="3" onclick="openMatkulUnggulanModal(this.id)">Learn More</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
@push('scripts')
    <script>
        function openMatkulUnggulanModal(elId){
            const id = elId;
            showMatkulUnggulanModal(id);
        }

        function showMatkulUnggulanModal(a){
            $('#matkul-unggulan-'+(a)).modal('show');
        }
    </script>
@endpush
