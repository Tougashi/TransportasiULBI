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
            <table id="articlesTable" class="table table-bordered table-striped">
                <thead>
                    <tr>
                        @foreach ($tableHeads as $heads)
                            <th>{{ $heads }}</th>
                        @endforeach
                    </tr>
                </thead>
                <tbody>
                    @foreach ($tableBodies as $item)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            @if (isset($item['judul']))
                                <td>{{ $item['judul'] }}</td>
                            @endif
                            @if (isset($item['category']))
                                <td>{{ $item['category'] }}</td>
                            @endif
                            @if (isset($item['author']))
                                <td>{{ $item['author'] }}</td>
                            @endif
                            @if (isset($item['tanggalPelaksanaan']))
                                <td>{{ $item['tanggalPelaksanaan'] }}</td>
                            @endif
                            @if (isset($item['views']))
                                <td>{{ $item['views'] }}</td>
                            @endif
                            <td>{{ $item['tanggalPosting'] }}</td>
                            <td>
                                <div class="d-flex">
                                    <td>
                                        <div class="d-flex">
                                            @if (!request()->is('admin/categories'))
                                                <a class="btn btn-info" href="{{ url()->current() . '/show/' . $item['id'] }}">
                                                    <i class="fas fa-solid fa-eye"></i>
                                                </a>
                                                <a class="btn btn-danger" href="{{ url()->current() . '/delete/' . $item['id'] }}"
                                                    onclick="return(confirm('Apakah anda yakin akan menghapus data ini ?'))">
                                                    <i class="fas fa-solid fa-trash"></i>
                                                </a>
                                            @endif
                                        </div>
                                    </td>
                                    
                                </div>
                            </td>
                            
                        </tr>
                    @endforeach
            </table>
        </div>
        <!-- /.card-body -->
    </div>
    <!-- /.card -->
    </div>
@endsection
@push('scripts')
    <script>
        $().ready(function() {
            datatableInit('#articlesTable');
        });
    </script>
@endpush
