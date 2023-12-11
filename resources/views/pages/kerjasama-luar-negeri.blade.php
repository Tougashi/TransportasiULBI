@extends('layouts.index')
@section('main')
    <section class="section section-lg pb-1">
        <h3 class="text-center fw-bold mb-5">{{ $NavbarTitle }}</h3>
        <div class="container">
            <div class="row gap-3 d-flex justify-content-center">
                <div class="col-12">
                    <h5 class="mb-3 fw-normal">Daftar Instansi, Perusahaan yang melakukan kerja sama dengan Prodi S1 Manajemen
                        Transportasi
                        yang difasilitasi Kepala Humas, Promosi dan Kerjasama</h5>
                </div>
                <div class="col-12">
                    <img src="{{ asset('assets/img/pages/kerjasama_20LN.png') }}" alt="" class="img-fluid">
                </div>
            </div>
        </div>
    </section>
@endsection
