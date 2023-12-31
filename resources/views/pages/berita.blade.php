@extends('layouts.index')
@section('main')
    <section class="section section-lg">
        <div class="row d-flex">
            <div class="col-lg-10 col-sm-1">
                @foreach ($data as $item)
                    <div class="container">
                        <div class="row">
                            <div class="col-12 text-center">
                                <h1 class="fw-bolder h1">{{ $item->title }}</h1>
                                <p class="mb-0">Penulis : <span class="fw-bold">{{ $item->author->author }}</span></p>
                                <p>{{ $item->created_at->format('d F Y') }}</p>
                            </div>
                            <div class="col-12 d-flex justify-content-center">
                                @include('backend.components.share-button')
                            </div>
                            <div class="col-12 my-5 d-flex justify-content-center">
                                {!! $item->body !!}
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
            <div class="col-lg-2 col-sm-12">
                <div class="container d-flex justify-content-start">
                    <p class="text-left">Popular Post</p>
                </div>
            </div>
        </div>
    </section>
@endsection
