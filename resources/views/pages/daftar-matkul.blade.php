@extends('layouts.index')
@section('main')
{{-- <br> --}}
<section class="section section-lg pb-1">
    <div class="container mb-6">
        <h1 class="text-center fw-bold">{{$NavbarTitle}}</h1>
        <div class="container mt-5">
            <section class="my-calendar-section">
                <div class="card bg-orange">
                    <div class="card-header bg-orange text-white">
                        <div class="row">
                            <h3 class="card-title fw-bold mb-0 text-center">Daftar Mata Kuliah Program Studi S1 Manajemen Transportasi</h3>
                        </div>                   
                    </div>
                    <div class="card-body bg-white py-5 rounded-bottom border border-black">
                        <div class="table-responsive">
                            <table id="articlesTable" class="table table-bordered table-striped border-primary">
                        </div>
                            <thead>
                                <tr>
                                    <th scope="col" rowspan="2" class="text-center align-middle">Semester</th>
                                    <th scope="col" rowspan="2" class="text-center align-middle">Nama Mata Kuliah</th>
                                    <th scope="col" colspan="2" class="text-center">Bobot SKS</th>
                                </tr>
                                <tr>
                                    <th scope="col" class="text-center">Teori</th>
                                    <th scope="col" class="text-center">Praktek</th>
                                </tr>
                            </thead>
                            @foreach ($data as $item => $group)
                            <tbody>
                                <tr>
                                    <td rowspan="{{ count($group)}}">{{ $item }}</td>
                                    <td class="align-middle">{{ $group[0]->body }}</td>
                                    <td class="text-center">{{ $group[0]->image }}</td>
                                    <td class="text-center">{{ $group[0]->excerpt }}</td>
                                </tr>
                                @for ($i = 1; $i < count($group); $i++)
                                <tr>
                                    <td class="align-middle">{{ $group[$i]->body }}</td>
                                    <td class="text-center">{{ $group[$i]->image }}</td>
                                    <td class="text-center">{{ $group[$i]->excerpt }}</td>
                                </tr>
                                @endfor
                                @php
                                $totalTeoriA = 0;
                                $totalPraktekA = 0;
        
                                foreach ($group as $groupItem) {
                                    if(!empty($groupItem->image)){
                                        $totalTeoriA += $groupItem->image;
                                    }
                                    if(!empty($groupItem->excerpt)){
                                        $totalPraktekA += $groupItem->excerpt;
                                    }
                                }
                                @endphp
                                <tr class="font-weight-bold bg-primary text-light">
                                    @if ($item !== 'Mata Kuliah Pilihan')
                                    <td colspan="2" class="text-right text-light">Total SKS Semester {{$item}}</td>
                                    @else
                                    <td colspan="2" class="text-right">Total SKS {{ $item }}</td>
                                    @endif
                                    <td class="text-center text-light">{{$totalTeoriA}}</td>
                                    <td class="text-center text-light">{{$totalPraktekA}}</td>
                                </tr>
                              @endforeach
                            </table>
                        </div>
                    </div>
                </div>
            </section>
            <br>
            <div class="container-fluid px-0">
                <h3 class="text-center fw-bold mt-5 mb-4">Mata Kuliah Unggulan</h3>
                <div class="row gap-3 d-flex justify-content-center">
                    <div class="col-12 col-md-6 col-lg-3 mb-5 mb-lg-0">
                        <div class="card shadow" style="height: 300px;">
                            <div class="card-body d-flex flex-column align-items-start">
                                <h3 class="h5 card-title fw-bolder mt-3">Perencanaan Sistem Transportasi</h3>
                                <p class="card-text">Tata Guna Lahan & Industri, Geografi Transportasi, Manajemen Rekayasa Lalu Lintas, Perencanaan & Pemodelan Transportasi</p>
                                <button class="btn bg-orange-prodi text-light btn-sm shadow p-2 mt-auto" id="1" onclick="openMatkulUnggulanModal(this.id)">Baca Selengkapnya</button>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-6 col-lg-3 mb-5 mb-lg-0">
                        <div class="card shadow" style="height: 300px;">
                            <div class="card-body d-flex flex-column align-items-start">
                                <h3 class="h5 card-title fw-bolder mt-3">Ekonomi & Bisnis Transportasi</h3>
                                <p class="card-text">Analisis Biaya & Tarif Transportasi, Manajemen Bisnis Transportasi, Bisnis Digital Transportasi, Kewirausahaan</p>
                                <button class="btn bg-orange-prodi text-light btn-sm shadow p-2 mt-auto" id="2" onclick="openMatkulUnggulanModal(this.id)">Baca Selengkapnya</button>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-6 col-lg-4 mb-5 mb-lg-0">
                        <div class="card shadow" style="height: 300px;">
                            <div class="card-body d-flex flex-column align-items-start">
                                <h3 class="h5 card-title fw-bolder mt-3">Operasi Transportasi</h3>
                                <p class="card-text">Sistem Operasi Prasarana (Bandar Udara, Pelabuhan), Manajemen Operasi Sarana (Truk, Kereta Api, Laut, Udara), Sistem Distribusi, Supply Chain Management, Manajemen Postal</p>
                                <button class="btn bg-orange-prodi text-light btn-sm shadow p-2 mt-auto" id="3" onclick="openMatkulUnggulanModal(this.id)">Baca Selengkapnya</button>
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
