@extends('backend.layouts.index')
@section('content')
    <div class="card">
        <div class="card-body">
            @include('backend.components.add-data-button')
        <table class="table table-striped" id="kegiatanHimpunan">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Nama Anggota</th>
                    <th>Jabatan</th>
                    <th>Tanggal Bergabung</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach ( $daftarAnggota as $item )
                <tr>
                    <td>{{$loop->iteration}}</td>
                    <td>{{$item->title}}</td>
                    <td>{{$item->body}}</td>
                    <td>{{$item->created_at->format('d F Y')}}</td>
                    <td>
                        <a href="{{url()->current().'/edit/'.encrypt($item->id)}}" class="btn btn-secondary">E</a>
                        <a href="{{url()->current().'/delete/'.encrypt($item->id)}}" onclick="return confirm('Apakah anda Yakin akan menghapus data ini ?')" class="btn btn-danger">D</a>
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
