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
                Detail data {{$title}}
            </div>
        </div>
    </div>
    <div class="card">
        <div class="card-body">
            <form action="/admin/user/author/update/{{encrypt($data->id)}}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="form-group pb-1">
                    <label class="col-form-label" for="emailUser">Email</label>
                    <input type="email" name="email" class="form-control" value="{{$data->email}}" readonly id="emailUser"
                        placeholder="Email User" required>
                </div>
                <div class="form-group pb-1">
                    <label class="col-form-label" for="userFullName">Nama Lengkap</label>
                    <input type="text" name="author" class="form-control" value="{{$data->author}}" readonly id="userFullName"
                        placeholder="Nama Lengkap" required>
                </div>
                <div class="form-group pb-1">
                    <label class="col-form-label" for="username">Username</label>
                    <input type="text" name="username" class="form-control" value="{{$data->username}}" readonly id="username"
                        placeholder="Username" required>
                </div>

                <div class="form-group pb-1 d-none" id="passwordForm">
                    <label class="col-form-label" for="username">Password</label>
                    <input type="password" name="password" class="form-control" value="" readonly id="password"
                        placeholder="Password" required>
                </div>


                <div class="form-group pb-5">
                    <div class="container row d-flex">
                        <div class="col-6 d-none" id="thumbnailForm">
                            <label class="col-form-label" for="thumbnailInput">Foto Profil <br></label><br>
                            {{-- <label class="col-form-label" for="thumbnailInput">Foto Dosen <br><span class="text-danger">* gambar harus berukuran / berdimensi [3 x 4] atau [354px x 472px] </span></label><br> --}}
                            <input type="file" src="" alt="" class="form-control" name="profilePhoto"
                                id="thumbnailInput" required>
                        </div>
                        <div class="col-6">
                            <label class="col-form-label" for="thumbnailInput">Preview</label><br>
                            <div
                                class="container border border-primary rounded h-100 d-flex align-items-center justify-content-center">
                                <div class="" id="thumbnail">
                                    @if(isset($data->profilePhoto))
                                    <img src="{{asset('/storage/'.$data->profilePhoto)}}" alt="" class="w-100 h-100 p-0 m-0">
                                    @else
                                    <img src="{{asset('assets/backend/dist/img/user2-160x160.jpg')}}" class="w-100 h-100 p-0 m-0" alt="User Image">
                                    @endif
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
