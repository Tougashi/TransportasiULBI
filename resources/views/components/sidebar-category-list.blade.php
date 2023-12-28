@foreach ($categories as $item)
<li class="nav-item">
    <a href="/admin/{{$item->slug}}" class="nav-link {{$item->category == $title ? 'active' : ''}}">
        <i class="far fa-circle nav-icon"></i>
        <p>{{ $item->category }}</p>
    </a>
</li>
@endforeach
