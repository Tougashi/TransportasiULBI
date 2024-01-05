@extends('backend.layouts.index')
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
                    <label class="col-form-label" for="judulArtikel">Judul Event</label>
                    <input type="text" name="title" class="form-control" id="judulArtikel" placeholder="Judul Pengumuman" required>
                </div>
                <div class="form-group pb-1">
                    <label class="col-form-label" for="dateArtikel">Tanggal Event yang akan datang</label>
                    <input type="date" name="date" class="form-control" id="dateArtikel" placeholder="Tanggal Pengumuman" required>
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
