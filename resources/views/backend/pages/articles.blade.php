@extends('backend.layouts.index')
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
          <th>Kategori</th>
          <th>Author</th>
          <th>Views</th>
          <th>Tanggal Posting</th>
        </tr>
        </thead>
        <tbody>
        @foreach ($articles as $item)
            <tr>
            <td>{{$loop->iteration}}</td>
            <td>{{$item->title}}</td>
            <td>{{$item->category->category}}</td>
            <td>{{$item->author->author}}</td>
            <td>{{$item->views}}</td>
            <td>{{$item->created_at->format('d/m/Y')}}</td>
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
        $().ready(function(){
            datatableInit('#articlesTable');
        });
    </script>
@endpush
