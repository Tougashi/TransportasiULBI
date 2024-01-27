@extends('layouts.index')
@section('main')
<section class="section section-lg pb-1">
    <div class="container mb-3">
        <h3 class="text-center fw-bold">{{$NavbarTitle}}<br> Daftar Mata Kuliah Program Studi S1 Manajemen Transportasi</h3>
        <div class="container mt-5">
            <section class="my-calendar-section">
                <div class="card bg-orange">
                    <div class="card-header bg-orange text-white">
                        <div class="row">
                            <h3 class="card-title fw-bold mb-0 text-center">SEMESTER 1</h3>
                        </div>
                    </div>
                    <div class="card-body bg-white py-5 rounded-bottom border border-black">
                        <table id="articlesTable" class="table table-bordered table-striped border-primary">
                            <thead>
                                <tr>
                                  <th scope="col" rowspan="2" class="text-center align-middle">Nama Mata Kuliah</th>
                                  <th scope="col" colspan="2" class="text-center">Bobot SKS</th>
                                </tr>
                                <tr>
                                  <th scope="col" class="text-center">Teori</th>
                                  <th scope="col" class="text-center">Praktek</th>
                                </tr>
                              </thead>
                              <tbody>
                                <tr>
                                  <td class="align-middle">Matematika Dasar</td>
                                  <td class="text-center">2</td>
                                  <td class="text-center">1</td>
                                </tr>
                                <tr>
                                  <td class="align-middle">Pemrograman Web</td>
                                  <td class="text-center">3</td>
                                  <td class="text-center">1</td>
                                </tr>   
                              </tbody>
                              <tfoot>
                                <tr>
                                  <td class="fw-bold text-right">Total Semester 1</td>
                                  <td class="fw-bold text-center">Angka Total</td>
                                  <td class="text-center fw-bold">Angka Total</td>
                                </tr>
                              </tfoot>
                        </table>
                    </div>
                </div>
            </section>
            <br>
            <section class="my-calendar-section">
                <div class="card bg-orange">
                    <div class="card-header bg-orange text-white">
                        <div class="row">
                            <h3 class="card-title fw-bold mb-0 text-center">SEMESTER 2</h3>
                        </div>
                    </div>
                    <div class="card-body bg-white py-5 rounded-bottom">
                        <div id="calendar">
                            <section class="section section-lg py-0">
                                <div class="container-fluid d-flex">
                                    <div class="row gap-3 d-flex justify-content-center">
                                        
                                    </div>
                                </div>
                            </section>
                        </div>
                    </div>
                </div>
            </section>
            <br>
            <section class="my-calendar-section">
                <div class="card bg-orange">
                    <div class="card-header bg-orange text-white">
                        <div class="row">
                            <h3 class="card-title fw-bold mb-0 text-center">SEMESTER 3</h3>
                        </div>
                    </div>
                    <div class="card-body bg-white py-5 rounded-bottom">
                        <div id="calendar">
                            <section class="section section-lg py-0">
                                <div class="container-fluid d-flex">
                                    <div class="row gap-3 d-flex justify-content-center">
                                        
                                    </div>
                                </div>
                            </section>
                        </div>
                    </div>
                </div>
            </section>
            <br>
            <section class="my-calendar-section">
                <div class="card bg-orange">
                    <div class="card-header bg-orange text-white">
                        <div class="row">
                            <h3 class="card-title fw-bold mb-0 text-center">SEMESTER 4</h3>
                        </div>
                    </div>
                    <div class="card-body bg-white py-5 rounded-bottom">
                        <div id="calendar">
                            <section class="section section-lg py-0">
                                <div class="container-fluid d-flex">
                                    <div class="row gap-3 d-flex justify-content-center">
                                        
                                    </div>
                                </div>
                            </section>
                        </div>
                    </div>
                </div>
            </section>
            <br>
            <section class="my-calendar-section">
                <div class="card bg-orange">
                    <div class="card-header bg-orange text-white">
                        <div class="row">
                            <h3 class="card-title fw-bold mb-0 text-center">SEMESTER 5</h3>
                        </div>
                    </div>
                    <div class="card-body bg-white py-5 rounded-bottom">
                        <div id="calendar">
                            <section class="section section-lg py-0">
                                <div class="container-fluid d-flex">
                                    <div class="row gap-3 d-flex justify-content-center">
                                        
                                    </div>
                                </div>
                            </section>
                        </div>
                    </div>
                </div>
            </section>
            <br>
            <section class="my-calendar-section">
                <div class="card bg-orange">
                    <div class="card-header bg-orange text-white">
                        <div class="row">
                            <h3 class="card-title fw-bold mb-0 text-center">SEMESTER 6</h3>
                        </div>
                    </div>
                    <div class="card-body bg-white py-5 rounded-bottom">
                        <div id="calendar">
                            <section class="section section-lg py-0">
                                <div class="container-fluid d-flex">
                                    <div class="row gap-3 d-flex justify-content-center">
                                        
                                    </div>
                                </div>
                            </section>
                        </div>
                    </div>
                </div>
            </section>
            <br>
            <section class="my-calendar-section">
                <div class="card bg-orange">
                    <div class="card-header bg-orange text-white">
                        <div class="row">
                            <h3 class="card-title fw-bold mb-0 text-center">SEMESTER 7</h3>
                        </div>
                    </div>
                    <div class="card-body bg-white py-5 rounded-bottom">
                        <div id="calendar">
                            <section class="section section-lg py-0">
                                <div class="container-fluid d-flex">
                                    <div class="row gap-3 d-flex justify-content-center">
                                        
                                    </div>
                                </div>
                            </section>
                        </div>
                    </div>
                </div>
            </section>
            <br>
            <section class="my-calendar-section">
                <div class="card bg-orange">
                    <div class="card-header bg-orange text-white">
                        <div class="row">
                            <h3 class="card-title fw-bold mb-0 text-center">SEMESTER 8</h3>
                        </div>
                    </div>
                    <div class="card-body bg-white py-5 rounded-bottom">
                        <div id="calendar">
                            <section class="section section-lg py-0">
                                <div class="container-fluid d-flex">
                                    <div class="row gap-3 d-flex justify-content-center">
                                        
                                    </div>
                                </div>
                            </section>
                        </div>
                    </div>
                </div>
            </section>
            <br>
            <section class="my-calendar-section">
                <div class="card bg-orange">
                    <div class="card-header bg-orange text-white">
                        <div class="row">
                            <h3 class="card-title fw-bold mb-0 text-center">MK PILIHAN</h3>
                        </div>
                    </div>
                    <div class="card-body bg-white py-5 rounded-bottom">
                        <div id="calendar">
                            <section class="section section-lg py-0">
                                <div class="container-fluid d-flex">
                                    <div class="row gap-3 d-flex justify-content-center">
                                        
                                    </div>
                                </div>
                            </section>
                        </div>
                    </div>
                </div>
            </section>
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
