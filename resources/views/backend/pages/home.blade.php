@extends('backend.layouts.index')
@section('content')
<div class="row">
    <div class="col-lg-3 col-6">
      <!-- small box -->
      <div class="small-box bg-info">
        <div class="inner">
          <h3>{{$countPosts}}</h3>

          <p>Total Artikel / Postingan</p>
        </div>
        <div class="icon">
          <i class="fas fa-newspaper"></i>
        </div>
      </div>
    </div>
    <!-- ./col -->
    <div class="col-lg-3 col-6">
      <!-- small box -->
      <div class="small-box bg-success">
        <div class="inner">
          <h3>{{count($categories)}}</h3>

          <p>Kategori</p>
        </div>
        <div class="icon">
          <i class="fas fa-copy"></i>
        </div>
      </div>
    </div>
    <!-- ./col -->
    <div class="col-lg-3 col-6">
      <!-- small box -->
      <div class="small-box bg-warning">
        <div class="inner">
          <h3>{{$countAuthors}}</h3>

          <p>Authors</p>
        </div>
        <div class="icon">
          <i class="fas fa-users"></i>
        </div>
      </div>
    </div>
    <!-- ./col -->
    <div class="col-lg-3 col-6">
      <!-- small box -->
      <div class="small-box bg-danger">
        <div class="inner">
          <h3>{{$countViewers}}</h3>

          <p>Pengunjung</p>
        </div>
        <div class="icon">
          <i class="fas fa-eye"></i>
        </div>
      </div>
    </div>
    <!-- ./col -->
  </div>
  </div>
@endsection

