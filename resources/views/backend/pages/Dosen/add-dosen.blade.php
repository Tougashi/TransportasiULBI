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
                Tambah Data {{$title}}
            </div>
        </div>
    </div>
    <div class="card">
        <div class="card-body">
            <form action="{{ url()->current() . '/store' }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="form-group pb-1">
                    <label class="col-form-label" for="judulArtikel">Nama Dosen</label>
                    <input type="text" name="title" class="form-control" id="judulArtikel"
                        placeholder="Nama Dosen" required>
                </div>
                <div class="form-group pb-1">
                    <label class="col-form-label" for="judulArtikel">Jabatan Dosen</label>
                    <input type="text" name="postBody" class="form-control" id="bodyArtikel"
                        placeholder="Jabatan Dosen" required>
                </div>
                <div class="form-group pb-1" id="riwayatPendidikan">
                    <label class="col-form-label d-flex" for="judulArtikel">Riwayat Pendidikan
                        <span class="badge btn btn-sm btn-primary ml-auto" id="appenderInput">Tambah</span>
                    </label>
                    <input type="text" name="" class="form-control mb-2" id="riwayatPendidikanInput1"
                        placeholder="Riwayat Pendidikan" required>
                </div>
                <div class="form-group pb-1">
                    <div class="container row d-flex m-0 p-0">
                        <div class="col-6">
                            <label class="col-form-label" for="thumbnailInput">Foto Dosen<br></label><br>
                            <input type="file" src="" alt="" class="form-control" name="thumbnail"
                                id="thumbnailInput" required>
                        </div>
                        <div class="col-6">
                            <label class="col-form-label" for="thumbnailInput">Preview</label><br>
                            <div
                                class="container border border-primary rounded h-100 d-flex align-items-center justify-content-center">
                                <div class="" id="thumbnail">
                                    Pratinjau foto unggahan anda akan muncul disini
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <input type="hidden" name="excerpt" id="riwayat">
                <br><br>
                <div class="row w-100">
                    <div class="col-lg-4 col-sm-4 col-12">
                        <a class="btn btn-secondary w-100" href="/admin/dosen">Batal</a>
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
    @include('components.dosen-script')
@endpush
