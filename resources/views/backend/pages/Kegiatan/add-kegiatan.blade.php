@extends('backend.layouts.index')
{{-- @section('plugins')
    <link rel="stylesheet" href="{{ asset('/assets/backend/plugins/select2/css/select2.min.css') }}">
    <link rel="stylesheet" href="{{ asset('/assets/backend/plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css') }}">
    <script src="{{ asset('/assets/backend/plugins/select2/js/select2.full.min.js') }}"></script>
@endsection --}}
@section('content')
    <div class="card mb-1">
        <div class="card-body">
            <div class="card-title">
                Tambah data {{$title}}
            </div>
        </div>
    </div>
    <div class="card">
        <div class="card-body">
            <form action="{{ url()->current() . '/store' }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="form-group pb-1">
                    <label class="col-form-label" for="judulArtikel">Judul Kegiatan</label>
                    <input type="text" name="title" class="form-control" id="judulArtikel"
                        placeholder="Judul Kegiatan" required>
                </div>
                <div class="form-group pb-1">
                    <label class="col-form-label" for="slugArtikel">Slug</label>
                    <input type="text" name="slug" class="form-control disabled" readonly id="slugArtikel"
                        placeholder="Slug Kegiatan">
                </div>
                <div class="form-group pb-1">
                    <div class="container row d-flex">
                        <div class="col-6">
                            <label class="col-form-label" for="thumbnailInput">Thumbnail</label><br>
                            <input type="file" src="" alt="" class="form-control" name="thumbnail"
                                id="thumbnailInput" required>
                        </div>
                        <div class="col-6">
                            <label class="col-form-label" for="thumbnailInput">Preview</label><br>
                            <div
                                class="container border border-primary rounded h-100 d-flex align-items-center justify-content-center">
                                <div class="" id="thumbnail">
                                    Pratinjau Thumbnail Unggahan anda akan muncul disini
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <input type="hidden" name="postBody" id="postBody" value="" required>
                <div class="form-group pb-1">
                    <label class="col-form-label" for="bodyArtikel">Isi Kegiatan</label>
                    <trix-editor input="postBody" class="trix-content"></trix-editor>
                </div>
                <input type="hidden" name="bodyImage" id="bodyImageField" value="">
                <div class="row w-100">
                    <div class="col-lg-4 col-sm-4 col-12">
                        <a class="btn btn-secondary w-100" href="/admin/kegiatan">Batal</a>
                    </div>
                    <div class="col-lg-4 col-sm-4 col-12 py-2">
                    </div>
                    <div class="col-lg-4 col-sm-4 col-12 ">
                        <button class="btn btn-primary w-100" id="submitBtn">Simpan</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
    </div>
@endsection
@push('scripts')
    @include('components.live-thumbnail')
    {{-- <script>
        $('.select2').select2()

        //Initialize Select2 Elements
        $('.select2bs4').select2({
            theme: 'bootstrap4'
        })
    </script> --}}
@endpush
