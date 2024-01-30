@extends('layouts.index')
@section('main')
<section class="section section-lg pb-1">
    <h1 class="text-center fw-bold mb-4">{{$NavbarTitle}}</h1>
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
