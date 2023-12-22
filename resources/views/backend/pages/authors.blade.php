@extends('backend.layouts.index')
@section('content')
    <div class="card">
        <div class="card-body">
            @include('backend.components.add-data-button')
            <table id="categoriesTable" class="table table-bordered table-striped">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Email</th>
                        <th>Username</th>
                        <th>Nama Lengkap</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($authors as $item)
                    <tr>
                        <td>{{$loop->iteration}}</td>
                        <td>{{$item->email}}</td>
                        <td>{{$item->username}}</td>
                        <td>{{$item->author}}</td>
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
