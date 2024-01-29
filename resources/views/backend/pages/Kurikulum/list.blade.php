@extends('backend.layouts.index')
@section('content')
    <div class="card">
        <div class="card-body">
            @include('backend.components.add-data-button')
            <thead class="bg-secondary">
                    <table class="table table-bordered text-center my-5" id="kurikulumTable">
                    <tr>
                        <th rowspan="2" class="text-center align-middle">Semester</th>
                        <th rowspan="2" class="text-center align-middle">Nama Mata Kuliah</th>
                        <th colspan="2">Bobot SKS</th>
                        <th>Aksi</th>
                    </tr>
                    <tr>
                        <th>Teori</th>
                        <th>Praktek</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody class="w-100">
                    @foreach($data as $item => $group)
                    <tr>
                        <td rowspan="{{ count($group) + 1 }}">{{ $item }}</td>
                        <td>{{ $group[0]->body }}</td>
                        <td>{{ $group[0]->image }}</td>
                        <td>{{ $group[0]->excerpt }}</td>
                        <td>
                            <a href="{{url()->current().'/edit/'.$group[0]->id}}" class="btn btn-secondary">E</a>
                            <a href="{{url()->current().'/delete/'.$group[0]->id}}" class="btn btn-danger">D</a>
                        </td>
                    </tr>
                    @for ($i = 1; $i < count($group); $i++)
                    <tr>
                        <td>{{ $group[$i]->body }}</td>
                        <td>{{ $group[$i]->image }}</td>
                        <td>{{ $group[$i]->excerpt }}</td>
                        <td>
                            <a href="{{url()->current().'/edit/'.$group[$i]->id}}" class="btn btn-secondary">E</a>
                            <a href="{{url()->current().'/delete/'.$group[$i]->id}}" class="btn btn-danger">D</a>
                        </td>
                    </tr>
                    @endfor

                    @php
                        $totalTeoriA = 0;
                        $totalPraktekA = 0;

                        foreach ($group as $groupItem) {
                            if(!empty($groupItem->image)){
                                $totalTeoriA += $groupItem->image;
                            }
                            if(!empty($groupItem->excerpt)){
                                $totalPraktekA += $groupItem->excerpt;
                            }
                        }
                    @endphp

                    <tr class="font-weight-bold">
                        @if ($item !== 'Mata Kuliah Pilihan')
                        <td>Total SKS Semester {{$item}}</td>
                        @else
                        <td>Total SKS {{ $item }}</td>
                        @endif
                        <td>{{$totalTeoriA}}</td>
                        <td>{{$totalPraktekA}}</td>
                        <td></td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
{{-- @push('scripts')
    <script>
        datatableInit($('#kurikulumTable'));
    </script>
@endpush --}}
