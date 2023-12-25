@extends('backend.layouts.index')
@section('content')
    <div class="card mb-1">
        <div class="card-body">
            <div class="card-title">
                Tambah data Postingan / Artikel Baru
            </div>
        </div>
    </div>
    <div class="card">
        <div class="card-body">
            <form action="{{ url()->current() . '/store' }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="form-group pb-1">
                    <label class="col-form-label" for="judulArtikel">Judul Artikel</label>
                    <input type="text" name="title" class="form-control" id="judulArtikel"
                        placeholder="Judul Postingan / Artikel" required>
                </div>
                <div class="form-group pb-1">
                    <label class="col-form-label" for="slugArtikel">Slug</label>
                    <input type="text" name="slug" class="form-control disabled" readonly id="slugArtikel"
                        placeholder="Slug Postingan / Artikel">
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
                <div class="form-group pb-1">
                    <label class="col-form-label" for="bodyArtikel">Isi Artikel</label>
                    <input type="hidden" name="postBody" id="postBody" required>
                    <trix-editor input="postBody" class="trix-content"></trix-editor>
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
    <script>
        $('#judulArtikel').on('input', function() {
            const titleVal = $(this).val();
            const titleValSlugged = titleVal.split(' ').join('-');
            $('#slugArtikel').val(titleValSlugged);
        });

        $('#thumbnailInput').on('change', function() {
            const thumbnailPreview = $('#thumbnail');
            const image = $('#thumbnailInput').prop('files');

            const reader = new FileReader();
            reader.readAsDataURL(image[0]);
            reader.onload = function(e) {
                const previewThumbnailTemplate =
                    `<img src="${e.target.result}" alt="" class="w-100 h-100 p-0 m-0">`
                $('#thumbnail').empty().append(previewThumbnailTemplate);
            }

        });
    </script>
    <x-post-article-image url="{{ '/backend/article/upload/image' }}" />
@endpush
