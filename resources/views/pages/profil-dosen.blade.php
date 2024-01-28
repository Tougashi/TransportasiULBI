@extends('layouts.index')
@section('main')
    <section class="section section-lg pb-1">
        <h3 class="text-center fw-bolder mb-4">{{ $NavbarTitle }}</h3>
        <div class="container">
            <div class="row d-flex justify-content-center gap-4">
                <div class="col-12">
                    <img src="{{ asset('assets/img/pages/dosen_20prodi_20S1_20man.transportasi.png') }}" alt=""
                        class="img-fluid">
                </div>
                <div class="col-12">
                    <table class="table table-bordered text-center">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Nama Dosen</th>
                                <th>Riwayat Pendidikan</th>
                                <th>Jabatan</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($data as $item)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $item->title }}</td>
                                    <td class="text-start">
                                        @foreach (json_decode(json_decode($item->excerpt)) as $riwayat)
                                            {{ $riwayat }} <br>
                                        @endforeach
                                    </td>
                                    <td>{{$item->body}}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </section>
@endsection
