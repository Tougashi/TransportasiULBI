@extends('backend.layouts.index')
@section('content')
    <div class="container">
        <div class="row d-flex gap-5 justify-content-center">
            <div class="col-lg-6">
                <a href="{{url()->current().'/kegiatan/list'}}">
                <div class="card">
                    <div class="card-body">
                        <p class="text-center h5">Kegiatan Himpunan</p>
                    </div>
                </div>
            </a>
            </div>

            <div class="col-lg-6">
                <a href="{{url()->current().'/anggota/list'}}">
                <div class="card">
                    <div class="card-body">
                        <p class="text-center h5">Anggota Himpunan</p>
                    </div>
                </div>
            </a>
            </div>
        </div>
    </div>
@endsection
