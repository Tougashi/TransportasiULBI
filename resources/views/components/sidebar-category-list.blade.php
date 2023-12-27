<li class="nav-item  {{$categories[0]->category == $title ? 'menu-open' : ''}}">
    <a href="#" class="nav-link {{$categories[0]->category == $title ? 'active' : ''}}">
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
                <a href="/backend/{{$item->slug}}/list" class="nav-link {{$item->category == $title ? 'active' : ''}}">
                    <i class="far fa-circle nav-icon"></i>
                    <p>{{ $item->category }}</p>
                </a>
            </li>
        @endforeach
    </ul>
</li>
