@extends('layouts.index')
@section('main')
<br>
    <section class="section section-lg">
        <div class="container">
            <div class="row d-flex justify-content-center gap-4">
                <div class="col-lg-12 col-12">
                    <h4 class="text-center">Hasil Pencarian Dari kata kunci
                        <span class="fw-bolder">"{{ $searchQuery }}"</span>
                    </h4>
                </div>

                {{-- <div class="container my-5"> --}}
                @forelse ($articles as $article)
                    <div class="col-8 col-lg-3 col-md-8 mb-lg-0 m-0">
                        <div class="card shadow-sm">
                            <a href="/page/berita/{{ $article->slug }}">
                                <img src="{{ asset('storage/' . $article->thumbnail) }}" class="card-img-top rounded-top"
                                    alt="Thumbnail">
                                <div class="card-body">
                                    <h3 class="h5 card-title mt-3">{{ $article->title }}</h3>
                                    <p class="card-text">{!! $article->excerpt !!}</p>
                                </div>
                            </a>
                        </div>
                    </div>

                @empty
                    <div class="col-lg-12 col-12">
                        <h4 class="text-center">Tidak Ditemukan
                            <span class="fw-bolder">"{{ $searchQuery }}"</span>
                        </h4>
                    </div>
                @endforelse
                {{-- </div> --}}
            </div>
        </div>
    </section>
@endsection

@push('scripts')
@endpush
