{{-- @extends('backend.layouts.index')
@section('content')
    <div class="card">
        <!-- /.card-header -->
        <div class="card-body">
            @include('backend.components.add-data-button')
            <table id="articlesTable" class="table table-bordered table-striped">
                <thead>
                    <tr>
                        <th>No.</th>
                        <th>Judul</th>
                        <th>Author</th>
                        <th>Views</th>
                        <th>Waktu Posting</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($articles as $item)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $item->title }}</td>
                            <td>{{ $item->author->author }}</td>
                            <td>{{ $item->views }}</td>
                            <td>{{ $item->created_at->format('d F Y  H:i') }}</td>
                            <td>
                                <div class="d-flex">
                                    <a class="btn btn-info" href="{{url()->current().'/show/'.$item->id}}"><i class="fas fa-solid fa-eye"></i></a>
                                    <a class="btn btn-danger" href="{{url()->current().'/'.$item->id}}" onclick="return(confirm('Apakah anda yakin akan menghapus data ini ?'))"><i class="fas fa-solid fa-trash"></i></a>
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
@endpush --}}
