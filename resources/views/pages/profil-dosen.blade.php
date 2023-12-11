@extends('layouts.index')
@section('main')
<section class="section section-lg pb-1">
    <h3 class="text-center fw-bolder mb-4">{{$NavbarTitle}}</h3>
    <div class="container">
        <div class="row d-flex justify-content-center gap-4">
            <div class="col-12">
                <img src="{{asset('assets/img/pages/dosen_20prodi_20S1_20man.transportasi.png')}}" alt="" class="img-fluid">
            </div>
            <div class="col-12">
                <img src="{{asset('assets/img/pages/daftar_20dosen_20prodi_20S1_20man.transportasi.png')}}" alt="" class="img-fluid">
            </div>
        </div>
    </div>
</section>
@endsection
