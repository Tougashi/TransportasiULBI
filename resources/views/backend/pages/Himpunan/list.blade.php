@extends('backend.layouts.index')
@section('content')
    <div class="card">
        <div class="card-body">
            @include('backend.components.add-data-button')
        <table class="table table-striped" id="kegiatanHimpunan">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Nama Kegiatan</th>
                    <th>Tanggal Pelaksanaan</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach ( $daftarKegiatan as $item )
                <tr>
                    <td>{{$loop->iteration}}</td>
                    <td>{{$item->title}}</td>
                    <td>{{$item->date->format('d F Y')}}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection
@push('scripts')
    <script>
        datatableInit($('#kegiatanHimpunan'));
    </script>
@endpush
