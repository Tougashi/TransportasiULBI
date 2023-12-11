@extends('layouts.index')
@section('main')
    <section class="section section-lg pb-1">
        <div class="container">
            <h3 class="text-center fw-bolder mb-4">{{$NavbarTitle}}</h3>
            <div class="d-flex justify-content-center">
                <img src="{{asset('assets/img/pages/profil_20lulusan.png')}}" alt="" class="img-fluid rounded">
            </div>
                <h3 class="text-center fw-bolder mt-5 mb-4">Deskripsi Profil Lulusan</h3>
            <div class="d-flex justify-content-center">
                <img src="{{asset('assets/img/pages/deskripsi_20profil_20lulusan.png')}}" alt="" class="img-fluid rounded">
            </div>
        </div>
    </section>
@endsection
