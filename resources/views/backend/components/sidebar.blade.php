<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="#" class="brand-link">
      <img src="{{asset('assets/img/ulbi.png')}}" alt="ULBI Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">ULBI Dashboard</span>
    </a>


    <div class="sidebar">
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="{{asset('assets/backend/dist/img/user2-160x160.jpg')}}" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">{{auth()->user()->author}}</a>
        </div>
      </div>


      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <li class="nav-item">
            <a href="/backend/dashboard" class="nav-link {{$title == 'Dashboard' ? 'active' : ''}}">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Dashboard
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="/backend/articles" class="nav-link {{$title == 'Articles' ? 'active' : ''}}">
              <i class="nav-icon fas fa-newspaper"></i>
              <p>
                Artikel / Postingan
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="/backend/categories" class="nav-link {{$title == 'Categories' ? 'active' : ''}}">
              <i class="nav-icon fas fa-copy"></i>
              <p>Kategori / Segmen</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="/backend/authors" class="nav-link {{$title == 'Authors' ? 'active' : ''}}">
              <i class="nav-icon fas fa-user"></i>
              <p>Author</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="/backend/events" class="nav-link {{$title == 'Events' ? 'active' : ''}}">
              <i class="nav-icon fas fa-calendar"></i>
              <p>Event</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="/backend/attentions" class="nav-link {{$title == 'Attentions' ? 'active' : ''}}">
              <i class="nav-icon fas fa-exclamation"></i>
              <p>Pengumuman</p>
            </a>
          </li>

        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>
