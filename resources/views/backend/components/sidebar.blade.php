<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="#" class="brand-link">
      <img src="{{asset('assets/img/ulbi.png')}}" alt="ULBI Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">ULBI Dashboard</span>
    </a>


    <div class="sidebar">
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
            @if(isset(auth()->user()->profilePhoto))
            <img src="{{asset('/storage/'.auth()->user()->profilePhoto)}}" alt="" class="img-circle elevation-2">
            @else
            <img src="{{asset('assets/backend/dist/img/user2-160x160.jpg')}}" class="img-circle elevation-2" alt="User Image">
            @endif
        </div>
        <div class="info">
          <a href="#" class="d-block">{{auth()->user()->author}}</a>
        </div>
      </div>


      <nav class="my-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <li class="nav-item">
            <a href="/admin/dashboard" class="nav-link {{$title == 'Dashboard' ? 'active' : ''}}">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Dashboard
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="/admin/categories" class="nav-link {{$title == 'Kategori' ? 'active' : ''}}">
              <i class="nav-icon fas fa-copy"></i>
              <p>Kategori</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="/admin/user/author/list" class="nav-link {{$title == 'User' ? 'active' : ''}}">
              <i class="nav-icon fas fa-users"></i>
              <p>User</p>
            </a>
          </li>

          <div class="my-3 py-1 border-top border-bottom">
            <p class="text-light fw-bold mb-0 py-1 text-center">DATA</p>
          </div>

         <x-sidebar-category-list title="{{$title}}"/>


        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>
