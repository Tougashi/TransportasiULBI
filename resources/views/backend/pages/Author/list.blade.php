@extends('backend.layouts.index')
@section('content')
    <div class="card mb-1">
        <div class="card-body">
            <div class="card-title">
                Tambah data {{ $title }}
            </div>
        </div>
    </div>
    <div class="card">
        {{-- @dd($tableHeads) --}}
        <div class="card-body">
            @if ($title !== 'Kategori')
                @include('backend.components.add-data-button')
            @endif
            <table id="usersTable" class="table table-bordered table-striped">
                <thead>
                    <tr>
                       <th>No</th>
                       <th>Email</th>
                       <th>Username</th>
                       <th>Nama Lengkap</th>
                       {{-- <th></th> --}}
                    </tr>
                </thead>
                <tbody>
                    @foreach ($authors as $item)
                    <tr>
                        <td>{{$loop->iteration}}</td>
                        <td>{{$item->email}}</td>
                        <td>{{$item->username}}</td>
                        <td>{{$item->author}}</td>
                        {{-- <td>
                            <div class="d-flex">
                                <a class="btn btn-info" href="/admin/user/show/{{encrypt($item->id)}}">
                                    <i class="fas fa-solid fa-eye"></i>
                                </a>
                                <a class="btn btn-danger" href="/admin/user/delete/{{encrypt($item->id)}}"
                                    onclick="return(confirm('Apakah anda yakin akan menghapus data ini ?'))">
                                    <i class="fas fa-solid fa-trash"></i>
                                </a>
                            </div>
                        </td> --}}
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
@push('scripts')
    <script>
        $().ready(function() {
            datatableInit('#usersTable');
        });
    </script>
@endpush
