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
            <form action="/admin/user/author/create/store" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="form-group pb-1">
                    <label class="col-form-label" for="emailUser">Email</label>
                    <input type="email" name="email" class="form-control" id="emailUser"
                        placeholder="Email User" required>
                </div>
                <div class="form-group pb-1">
                    <label class="col-form-label" for="userFullName">Nama Lengkap</label>
                    <input type="text" name="author" class="form-control" id="userFullName"
                        placeholder="Nama Lengkap" required>
                </div>
                <div class="form-group pb-1">
                    <label class="col-form-label" for="username">Username</label>
                    <input type="text" name="username" class="form-control" id="username"
                        placeholder="Username" required>
                </div>
                <div class="form-group pb-1">
                    <label class="col-form-label" for="password">Password</label>
                    <input type="password" name="password" class="form-control" id="password"
                        placeholder="Password" required>
                </div>

                <div class="form-group pb-5">
                    <div class="container row d-flex">
                        <div class="col-6">
                            <label class="col-form-label" for="thumbnailInput">Thumbnail</label><br>
                            <input type="file" src="" alt="" class="form-control" name="profilePhoto"
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

                <div class="row w-100">
                    <div class="col-lg-4 col-sm-4 col-12">
                        <button class="btn btn-secondary w-100">Batal</button>
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
