@extends('backend.layouts.index')
@section('content')
    <div class="card">
        <div class="card-body">
            @include('backend.components.add-data-button')
            <table id="eventsTable" class="table table-bordered table-striped">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Judul</th>
                        <th>Deskripsi</th>
                        <th>Tanggal Pelaksanaan</th>
                        <th>Dibuat Pada</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($events as $item)
                    <tr>
                        <td>{{$loop->iteration}}</td>
                        <td>{{$item->title}}</td>
                        <td>{{$item->excerpt}}</td>
                        <td>{{$item->date->format('d/m/Y')}}</td>
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
            datatableInit('#eventsTable');
        });
    </script>
@endpush
