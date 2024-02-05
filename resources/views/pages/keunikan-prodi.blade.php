@extends('layouts.index')
@section('main')
    <section class="section section-lg pb-1">
        <div class="container">
            <h3 class="text-center fw-bolder">Keunikan Prodi</h3>
            <div class="row d-flex justify-content-center mt-4">
                <div class="col-8 col-md-8 col-lg-8 mb-5 mb-lg-0">
                    <div class="card shadow">
                        <img src="{{asset('assets/img/pages/cuma_20di_20kita_20tempatnya2.jpg')}}" class="card-img-top rounded-top"
                            alt="Themesberg office">
                        <div class="card-body">
                            <h3 class="card-title mt-3 fw-bolder text-center text-orange">
                                PRODI S1 MANAJEMEN TRANSPORTASI <br>BERFOKUS PADA <br>LALU LINTAS & TRANSPORTASI BARANG
                            </h3>
                            <ol class="card-text mt-4">
                                <li class="fs-5 my-3">Perencanaan sistem transportasi dalam ruang dan waktu, pada kondisi eksisting dan akan datang</li>
                                <li class="fs-5 my-3">Merancang pemecahan masalah bisnis transportasi, user cost, vehicle operation cost, dan social cost</li>
                                <li class="fs-5 my-3">Mengelola sistem operasi kebutuhan sarana/prasarana, pemilihan rute, operasi sarana/prasarana transportasi secara efektif, efisien, aman, dan ramah lingkungan</li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
