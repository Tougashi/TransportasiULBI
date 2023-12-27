<li class="nav-item">
    <a href="#" class="nav-link">
        <i class="nav-icon fas fa-list"></i>
        <p>
            Segmen
            <i class="fas fa-angle-left right"></i>
            <span class="badge badge-info right">{{ count($categories) }}</span>
        </p>
    </a>
    <ul class="nav nav-treeview">
        @foreach ($categories as $item)
            <li class="nav-item">
                <a href="/backend/{{$item->slug}}" class="nav-link {{$item->category == $title}}">
                    <i class="far fa-circle nav-icon"></i>
                    <p>{{ $item->category }}</p>
                </a>
            </li>
        @endforeach
    </ul>
</li>
