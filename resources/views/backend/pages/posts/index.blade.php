@extends('backend.layouts.index')
@section('content')
    <div class="card">
        <!-- /.card-header -->
        {{-- @dd($tableBodies) --}}
        <div class="card-body">
            @include('backend.components.add-data-button')
            <table id="articlesTable" class="table table-bordered table-striped">
                <thead>
                    <tr>
                        @foreach ( $tableHeads as $heads)
                        <th>{{$heads}}</th>
                        @endforeach
                    </tr>
                </thead>
                <tbody>
                    @foreach ($tableBodies as $item)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $item['judul'] }}</td>
                            <td>{{ $item['author'] }}</td>
                            @if (isset($item['tanggalPelaksanaan']))
                                <td>{{ $item['tanggalPelaksanaan'] }}</td>
                            @endif
                            <td>{{ $item['views'] }}</td>
                            <td>{{ $item['tanggalPosting'] }}</td>
                            <td>
                                <div class="d-flex">
                                    <a class="btn btn-info" href="{{url()->current().'/show/'.$item['id']}}"><i class="fas fa-solid fa-eye"></i></a>
                                    <a class="btn btn-danger" href="{{url()->current().'/'.$item['id']}}" onclick="return(confirm('Apakah anda yakin akan menghapus data ini ?'))"><i class="fas fa-solid fa-trash"></i></a>
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
