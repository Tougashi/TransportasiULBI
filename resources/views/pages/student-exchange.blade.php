@extends('layouts.index')
@section('main')
    <section class="section section-lg pb-1">
        <h3 class="text-center fw-bolder mb-4">Pelaksanaan {{$NavbarTitle}}</h3>
        <div class="container px-5">
            <div class="row gap-3">
                <div class="col-12">
                    <p>Mahasiswa Prodi S1 Manajemen Transportasi melaksanakan program Merdeka Belajar Kampus Merdeka (MBKM) yaitu mengikuti program magang, proyek mandiri, pertukaran mahasiswa dan kampus mengajar. Program MBKM tersebut dilakukan untuk mengembangkan kemandirian dalam mencari dan menemukan pengetahuan melalui kenyataan dan dinamika lapangan seperti persyaratan kemampuan, permasalahan riil, interaksi sosial, kolaborasi, manajemen diri, tuntutan kinerja, target dan pencapaiannya. </p>
                </div>
                <div class="col-12">
                    <p>Melalui program MBKM, mahasiswa berharap dapat menjawab tantangan untuk menghasilkan lulusan yang sesuai dengan perkembangan jaman, dimana mahasiswa mendapatkan bekal hardskill dan softskill yang kuat. Jumlah mahasiswa Prodi S1 Manajemen Transportasi yang mengikuti program MBKM berjumlah 2 (dua) mahasiswa, program proyek mandiri berjumlah 14 (empat belas) mahasiswa, program pertukaran mahasiswa berjumlah 17 (tujuh belas) mahasiswa, program kampus mengajar tahap-1 berjumlah 3 (tiga) mahasiswa dan program kampus mengajar tahap-2 berjumlah 1 (satu) mahasiswa.</p>
                </div>
                <div class="col-12 text-center">
                    <img src="{{asset('assets/img/pages/MBKM.png')}}" alt="" class="img-fluid">
                </div>
            </div>
        </div>
    </section>
@endsection
