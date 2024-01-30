@extends('layouts.index')
@section('main')
<section class="section section-lg pb-1">
    <h3 class="text-center fw-bold mb-4">{{$NavbarTitle}}</h3>
    <div class="container d-flex justify-content-center">
        <img src="{{asset('assets/img/pages/org-kemahasiswaan.png')}}" alt="" class="img-fluid">
    </div>
    <br>
    <div class="tf-tree example">
        <ul>
          <li>
            <span class="tf-nc">1</span>
            <ul>
              <li>
                <span class="tf-nc">2</span>
                <ul>
                  <li><span class="tf-nc">4</span></li>
                  <li>
                    <span class="tf-nc">5</span>
                    <ul>
                      <li><span class="tf-nc">9</span></li>
                      <li><span class="tf-nc">10</span></li>
                    </ul>
                  </li>
                  <li><span class="tf-nc">6</span></li>
                </ul>
              </li>
              <li>
                <span class="tf-nc">3</span>
                <ul>
                  <li><span class="tf-nc">7</span></li>
                  <li><span class="tf-nc">8</span></li>
                </ul>
              </li>
            </ul>
          </li>
        </ul>
      </div>
</section>
    @endsection
  {{-- <div class="col-12">
        <table class="table table-bordered text-center">
            <thead class="bg-orange">
                <tr class="text-light">
                    <th>No</th>
                    <th>Foto</th>
                    <th>Nama</th>
                    <th>Jabatan</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($data as $item)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td><img src="{{ asset('/storage/' . $item->thumbnail) }}" alt="" class="w-20 h-20 p-0 m-0"></td>
                    <td>{{ $item->title }}</td>
                    <td>{{ $item->body }}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div> --}}