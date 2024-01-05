@extends('backend.layouts.index')
@section('content')
    <div class="card">
        <div class="card-body">
            <h5><span id="formTitle">Detail</span> Pengumuman "{{$article->title}}"</h5>
            <div class="container py-4">
                <form action="/backend/articles/update/{{$article->id}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group pb-1">
                        <label class="col-form-label" for="judulArtikel">Judul Pengumuman</label>
                        <input type="text" name="title" class="form-control" id="judulArtikel" placeholder="{{ $article->title }}" value="{{ $article->title }}">
                    </div>
                    <div class="form-group pb-1">
                        <label class="col-form-label" for="dateArtikel">Tanggal Pelaksanaan</label>
                        <input type="date" name="date" class="form-control" id="dateArtikel" placeholder="Tanggal Pengumuman" required value="{{ $article->date }}">
                    </div>
                    <div class="row w-100">
                        <div class="col-lg-4 col-sm-4 col-12">
                            <a class="btn btn-secondary w-100" href="/admin/pengumuman">Batal</a>
                        </div>
                        <div class="col-lg-4 col-sm-4 col-12 py-2">
                        </div>
                        <div class="col-lg-4 col-sm-4 col-12 ">
                            <button class="btn btn-primary w-100" type="submit" id="submitBtn" onclick="changeMode(event)">Edit</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
@push('scripts')
    @include('components.live-thumbnail')
    @include('components.show-to-update-scripts')
@endpush
