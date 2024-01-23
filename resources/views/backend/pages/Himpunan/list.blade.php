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
                    <td>{{$item->created_at->format('d F Y')}}</td>
                    <td>
                        <a href="{{url()->current().'/edit/'.$item->slug}}" class="btn btn-secondary">E</a>
                        <a href="{{url()->current().'/delete/'.$item->slug}}" onclick="return confirm('Apakah anda Yakin akan menghapus data ini ?')" class="btn btn-danger">D</a>
                    </td>
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
