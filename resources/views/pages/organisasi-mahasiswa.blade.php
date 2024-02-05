@extends('layouts.index')
@section('main')
<section class="section section-lg pb-1">
    <div class="container">
        <h1 class="text-center fw-bold mb-1 mb-md-4">{{$NavbarTitle}}</h1>
        <div class="d-flex justify-content-center">
            {{-- GANTI IMAGE ORGANISASI --}}
            <img src="{{ asset('assets/img/pages/org-kemahasiswaan.png') }}" alt="" class="img-fluid my-3" style="max-width: 80%;">
        </div>
    </div>
    
    <div class="container d-flex justify-content-center">
        <br>
        <div class="col-12">
        <table class="table table-bordered text-center">
            <thead class="bg-orange">
                <tr class="text-light">
                    <th>No</th>
                    <th>Foto</th>
                    <th>Nama</th>
                    <th>Jabatan</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($data as $item)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td><img src="{{ asset('/storage/' . $item->thumbnail) }}" alt="" width="100" class="w-20 h-auto p-0 m-0"></td>
                    <td>{{ $item->title }}</td>
                    <td>{{ $item->body }}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
</section>

    @endsection
