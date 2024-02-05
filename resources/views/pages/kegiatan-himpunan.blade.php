@extends('layouts.index')
@section('main')
<br>
    <section>
        <div class="container-fluid pt-5">
            <h3 class="text-center fw-bolder mt-5 mb-4">Kegiatan Himpunan Mahasiswa Prodi : S1 Manajemen Transportasi</h3>
            <div class="row mt-5 gap-3 d-flex justify-content-center">
                @forelse ($Kegiatan as $kegiatan)
                    <div class="col-8 col-lg-3 col-md-8 mb-lg-0 m-0">
                        <div class="card shadow-sm">
                            <a href="/page/berita/{{ $kegiatan->slug }}">
                                <img src="{{ asset('storage/' . $kegiatan->thumbnail) }}"
                                    class="card-img-top rounded-top" alt="Thumbnail">
                                <div class="card-body">
                                    <h3 class="h5 card-title mt-3">{{ $kegiatan->title }}</h3>
                                    <p class="card-text">{!! $kegiatan->excerpt !!}</p>
                            </a>
                        </div>
                    </div>
            </div>
            @if(isset($Kegiatan))
            {{-- <button class="btn btn-secondary d-flex justify-content-center m-auto my-5 p-3" id="morePostsLoaderButton" onclick="loadMorePosts(event)"><span class="h5 text-light d-flex m-auto">Muat Kegiatan Lebih Banyak</span></button> --}}
            @endif
            @empty
            <div class="col-12 text-center">
                <div class="text-primary fw-bold h4 text-underline">Tidak ada Kegiatan Mahasiswa Terbaru</div>
            </div>
            @endforelse
        </div>
        {{-- @if(isset($Kegiatan))
        <button class="btn btn-secondary d-flex justify-content-center m-auto my-5 p-3" id="morePostsLoaderButton" onclick="loadMorePosts(event)"><span class="h5 text-light d-flex m-auto">Muat Kegiatan Lebih Banyak</span></button>
        @endif --}}
    </section>
@endsection