@extends('backend.layouts.index')
@section('content')
    <div class="card">
        <div class="card-body">
            <h5><span id="formTitle">Detail</span> Anggota Himpunan "{{$article->title}}"</h5>
            <div class="container py-4">
                <form action="{{url()->current().'/update'}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group pb-1">
                        <label class="col-form-label" for="judulArtikel">Nama Anggota</label>
                        <input type="text" name="title" class="form-control" id="judulArtikel" value="{{$article->title}}"
                            placeholder="Judul Postingan / Artikel" required>
                    </div>
                    <div class="form-group pb-1">
                        <label class="col-form-label" for="slugArtikel">Jabatan</label>
                        <input type="text" name="body" class="form-control" id="slugArtikel"
                            placeholder="Jabatan" value="{{$article->body}}" required>
                    </div>
                    <input type="hidden" name="bodyImage" id="bodyImageField" value="">
                    <div class="form-group mb-5">
                        <div class="container row d-flex">
                            <div class="col-6">
                                <label class="col-form-label" for="thumbnailInput">Thumbnail</label><br>
                                <input type="file" src="" value="{{$article->thumbnail}}" alt="" class="form-control" name="thumbnail"
                                    id="thumbnailInput">
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
                            <a class="btn btn-secondary w-100" href="/admin/himpunan/kegiatan/list">Batal</a>
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
