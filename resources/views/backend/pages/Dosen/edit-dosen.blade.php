@extends('backend.layouts.index')
@section('content')
    <div class="card">
        <div class="card-body">
            <h5><span id="formTitle">Detail</span> data Artikel "{{$article->title}}"</h5>
            <div class="container py-4">
                <form action="/backend/articles/update/{{$article->id}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group pb-1">
                        <label class="col-form-label" for="judulArtikel">Judul Artikel</label>
                        <input type="text" name="title" class="form-control" id="judulArtikel" value="{{$article->title}}"
                            placeholder="Judul Postingan / Artikel" required>
                    </div>
                    <div class="form-group pb-1">
                        <label class="col-form-label" for="slugArtikel">Slug</label>
                        <input type="text" name="slug" class="form-control disabled" readonly id="slugArtikel"
                            placeholder="Slug Postingan / Artikel" value="{{$article->slug}}">
                    </div>
                    <div class="form-group pb-1">
                        <div class="container row d-flex">
                            <div class="col-6">
                                <label class="col-form-label" for="thumbnailInput">Foto Dosen <br></label><br>
                                {{-- <label class="col-form-label" for="thumbnailInput">Foto Dosen <br><span class="text-danger">* gambar harus berukuran / berdimensi [3 x 4] atau [354px x 472px] </span></label><br> --}}
                                <input type="file" src="" alt="" class="form-control" name="thumbnail"
                                    id="thumbnailInput" required>
                            </div>
                            <div class="col-6">
                                <label class="col-form-label" for="thumbnailInput">Preview</label><br>
                                <div
                                    class="container border border-primary rounded h-100 d-flex align-items-center justify-content-center">
                                    <div class="" id="thumbnail">
                                        <img src="{{asset('/storage/'.$article->thumbnail)}}" alt="" class="w-100 h-100 p-0 m-0">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row w-100">
                        <div class="col-lg-4 col-sm-4 col-12">
                            <a class="btn btn-secondary w-100" href="">Batal</a>
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
