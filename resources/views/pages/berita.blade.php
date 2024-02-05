@extends('layouts.index')
@section('main')
<br>
    <section class="section section-lg pe-3 pe-sm-0 me-3 me-sm-0">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-9 col-sm-12">
                    @foreach ($data as $item)
                        <div class="container">
                            <div class="row">
                                <div class="col-12 text-center judul">
                                    <h1 class="fw-bolder h1">{{ $item->title }}</h1>
                                    <p class="mb-0">Penulis : <span class="fw-bold">{{ $item->author->author }}</span></p>
                                    <p>{{ $item->created_at->format('d F Y') }}</p>
                                </div>
                                
                                <div class="col-12 my-2 d-flex justify-content-center">
                                    @include('backend.components.share-button')
                                </div>
                                <div class="col-12 my-2 d-flex justify-content-center px-4">
                                    <img src="{{ asset('storage/' . $item->thumbnail) }}" class="rounded img-fluid w-100" alt="">
                                </div>
                                <div class="col-12 my-5 d-flex justify-content-center px-4">
                                    {!! $item->body !!}
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
                <div class="col-lg-3 col-sm-12 p-lg-0 py-sm-5">
                    <div class="container d-flex">
                        <p class="text-start fw-bolder h5">Artikel Terpopuler</p>
                    </div>
                    @foreach ($popularPost as $item)
                        <a href="{{'/page/berita/'.$item->slug}}">
                            <div class="container rounded shadow row py-3 px-1 my-2 border">
                                <div class="col-4">
                                    <img src="{{ asset('storage/' . $item->thumbnail) }}" class="rounded img-fluid w-100" alt="">
                                </div>
                                <div class="col-8 d-flex align-items-center">
                                    <p class="fw-bolder">{{ $item->title }}</p>
                                </div>
                            </div>
                        </a>
                    @endforeach
                </div>
            </div>
        </div>
    </section>
@endsection
