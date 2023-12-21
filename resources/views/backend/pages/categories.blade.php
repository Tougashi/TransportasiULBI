@extends('backend.layouts.index')
@section('content')
    <div class="card">
        <div class="card-body">
            <table id="categoriesTable" class="table table-bordered table-striped">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Kategori</th>
                        <th>Dibuat Pada</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($categories as $item)
                    <tr>
                        <td>{{$loop->iteration}}</td>
                        <td>{{$item->category}}</td>
                        <td>{{$item->created_at->format('d/m/Y')}}</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
@push('scripts')
    <script>
        $().ready(function(){
            datatableInit('#categoriesTable');
        });
    </script>
@endpush
