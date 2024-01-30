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
                Tambah Data {{ $title }}
            </div>
        </div>
    </div>
    <form action="{{ url()->current() . '/store' }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="card">
            <div class="card-body">
                <div class="form-group pb-1">
                    <label class="col-form-label" for="judulArtikel">Nama Mata Kuliah</label>
                    <input type="text" name="namaMatkul" class="form-control" id="judulArtikel" placeholder="Nama"
                        required>
                </div>
                <div class="form-group pb-1">
                    <label class="col-form-label" for="judulArtikel">Semester 1 - 8 & Mata Kuliah Unggulan</label>
                    <select name="semester" class="form-control">
                        <option value="">Pilih Semester</option>
                        <option value="1">Semester 1</option>
                        <option value="2">Semester 2</option>
                        <option value="3">Semester 3</option>
                        <option value="4">Semester 4</option>
                        <option value="5">Semester 5</option>
                        <option value="6">Semester 6</option>
                        <option value="7">Semester 7</option>
                        <option value="8">Semester 8</option>
                        <option value="MK-Pilihan Semester 6">MK-Pilihan Semester 6</option>
                        <option value="MK-Pilihan Semester 7">MK-Pilihan Semester 7</option>
                        <option value="MK-Pilihan Semester 8">MK-Pilihan Semester 8</option>
                    </select>
                </div>
            </div>
        </div>
        <div class="card">
            <div class="card-body">
                <div class="form-group pb-1">
                    <h4 class="text-center font-weight-bold">Bobot SKS</h4>
                    <div class="container row d-flex m-0 p-0">
                        <div class="col-6">
                            <label class="col-form-label" for="judulArtikel">Tipe</label>
                            <select name="" class="form-control" id="tipeSksSwitch">
                                <option value="">Pilih Tipe</option>
                                <option value="1">Teori</option>
                                <option value="2">Praktik</option>
                            </select>
                        </div>
                        <div id="tipeSksWrapper" class="col-6"></div>
                    </div>
                </div>
                <br><br>
                <div class="row w-100">
                    <div class="col-lg-4 col-sm-4 col-12">
                        <a class="btn btn-secondary w-100" href="/admin/kurikulum">Batal</a>
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
    <script>
        $('#tipeSksSwitch').on('change', function() {
            let val = $('#tipeSksSwitch').val();
            const wrapper = $('#tipeSksWrapper');
            if (val == 2) {
                wrapper.empty().append(`
                <label class="col-form-label" for="judulArtikel">Praktik</label>
                <input type="number" name="praktik" class="form-control" id="judulArtikel"
                    placeholder="Masukan Jumlah" required>
            `);
            } else if(val == 1) {
                wrapper.empty().append(`
                <label class="col-form-label" for="judulArtikel">Teori</label>
                <input type="number" name="teori" class="form-control" id="judulArtikel"
                    placeholder="Masukan Jumlah" required>
            `);
            } else {
                wrapper.empty();
            }
        });
    </script>
@endpush
