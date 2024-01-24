@extends('backend.layouts.index')
@section('content')
    <div class="card">
        <div class="card-body">
            @include('backend.components.add-data-button')
            <table class="table border text-center my-5" id="">
                <thead class="bg-secondary">
                    <tr>
                        <th>Semester</th>
                        <th>Nama Mata Kuliah</th>
                        <th colspan="2">Bobot SKS</th>
                        <th>Aksi</th>
                    </tr>
                    <tr>
                        <th></th>
                        <th></th>
                        <th>Teori</th>
                        <th>Praktek</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody class="w-100">
                    <tr>
                        <td rowspan="5">1</td>
                        <td>1</td>
                        <td>1</td>
                        <td>1</td>
                        <td>1</td>
                    </tr>
                    <tr>
                        {{-- <td>1</td> --}}
                        <td>1</td>
                        <td>1</td>
                        <td>1</td>
                        <td>1</td>
                    </tr>
                    <tr>
                        {{-- <td>1</td> --}}
                        <td>1</td>
                        <td>1</td>
                        <td>1</td>
                        <td>1</td>
                    </tr>
                    <tr>
                        {{-- <td>1</td> --}}
                        <td>1</td>
                        <td>1</td>
                        <td>1</td>
                        <td>1</td>
                    </tr>
                    <tr>
                        {{-- <td>1</td> --}}
                        <td>1</td>
                        <td>1</td>
                        <td>1</td>
                        <td>1</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
@endsection
