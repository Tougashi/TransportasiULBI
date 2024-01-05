@extends('backend.layouts.index')
@section('content')
    <div class="card">
        <div class="card-body">
            <h5><span id="formTitle">Detail</span> Testimoni "{{$article->title}}"</h5>
            <div class="container py-4">
                <form action="/backend/articles/update/{{$article->id}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group pb-1">
                        <label class="col-form-label" for="judulArtikel">Nama</label>
                        <input type="text" name="title" class="form-control" id="judulArtikel"
                            placeholder="Nama Testimonial" value="{{ $article->title }}" required>
                    </div>
                    <div class="form-group pb-1">
                        <label class="col-form-label" for="judulArtikel">Kalimat Testimoni</label>
                        <input type="text" name="postBody" class="form-control" id="bodyArtikel"
                            placeholder="Kalimat Testimoni" value="{{ $article->body }}" required>
                    </div>
                    <div class="row w-100">
                        <div class="col-lg-4 col-sm-4 col-12">
                            <a class="btn btn-secondary w-100" href="/admin/review">Batal</a>
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
