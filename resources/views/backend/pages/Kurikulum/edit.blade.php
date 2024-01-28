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
                <span id="formTitle">Detail</span> Data {{ $title }}
            </div>
        </div>
    </div>
    <form action="{{ url()->current() . '/update' }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="card">
            <div class="card-body">
                <div class="form-group pb-1">
                    <label class="col-form-label" for="judulArtikel">Nama Mata Kuliah</label>
                    <input type="text" name="namaMatkul" value="{{$data->body}}" class="form-control" id="judulArtikel" placeholder="Nama"
                        required>
                </div>
                <div class="form-group pb-1">
                    <label class="col-form-label" for="judulArtikel">Semester</label>
                    <input type="text" name="semester" value="{{$data->title}}" class="form-control" id="bodyArtikel" placeholder="Semester"
                        required>
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
                            <select name="" class="form-control" id="tipeSksSwitch" disabled>
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
                        <button class="btn btn-primary w-100" type="submit" id="submitBtn" onclick="changeMode(event)">Edit</button>
                    </div>
                </div>
    </form>
    </div>
    </div>
    </div>
@endsection
@push('scripts')
    <script>
        // let tipeSks;
        let teori = '{{$data->image}}';
        let praktik = '{{$data->excerpt}}';
        const wrapper = $('#tipeSksWrapper');

        function appendTeori(){
            wrapper.empty();
            wrapper.append(`
            <label class="col-form-label" for="judulArtikel">Teori</label>
            <input type="text" name="teori" class="form-control" id="judulArtikel"
            placeholder="Teori" required value="${teori}">
            `);
        }

        function appendPraktik(){
            wrapper.empty();
            wrapper.append(`
                <label class="col-form-label" for="judulArtikel">Praktik</label>
                <input type="text" name="praktik" class="form-control" id="judulArtikel"
                placeholder="Praktik" required value="${praktik}">
            `);
        }

        if(teori)
        {
            appendTeori();
            $('#tipeSksSwitch').val('1').change();
        }else
        {
            appendPraktik();
            $('#tipeSksSwitch').val('2').change();
        }


        $('#tipeSksSwitch').on('change', function() {
            let val = $('#tipeSksSwitch').val();
            if (val == 2) {
                appendPraktik();
            } else if(val == 1) {
               appendTeori();
            } else {
                wrapper.empty();
            }
        });
    </script>
    @include('components.show-to-update-scripts')
@endpush
