@extends('layouts.index')
@section('main')
    <section class="section section-lg">
        <div class="row">
            <div class="container">
                <div class="col-lg-12 col-12">
                    <h4 class="text-center">Hasil Pencarian Dari kata kunci
                        <span class="fw-bolder">"{{ $searchQuery }}"</span>
                    </h4>
                </div>
            </div>
            <div class="container my-5">

            </div>
        </div>
    </section>
@endsection

@push('scripts')
@endpush
