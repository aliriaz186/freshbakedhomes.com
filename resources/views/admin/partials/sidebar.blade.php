<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
  <!-- Brand Logo -->
  <a href="{{ route('admin.dashboard') }}" class="brand-link">
    <img src="/admin-assets/dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
      style="opacity: .8">
    <span class="brand-text font-weight-light">{{ env('APP_NAME') }}</span>
  </a>

  <!-- Sidebar -->
  <div class="sidebar">
    <hr>

    <!-- Sidebar Menu -->
    <nav class="mt-2">
      <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
        <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
        <li class="nav-item has-treeview menu-open">

          <ul class="nav nav-treeview">
            <li class="nav-item">
              <a href="{{ route('admin.dashboard') }}" class="nav-link">
                <i class="fas fa-user-secret"></i>
                <p> Dashboard</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="{{ route('video.index') }}" class="nav-link {{ Request::is('admin/video*') ? 'active' : '' }}">
                <i class="fas fa-bahai"></i>
                <p>Videos</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="{{ route('image.index')}}" class="nav-link {{ Request::is('admin/image*') ? 'active' : '' }}">
                <i class="fas fa-copy"></i>
                <p>Image Gallery</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="{{ route('contact.index')}}"
                class="nav-link {{ Request::is('admin/contact*') ? 'active' : '' }}">
                <i class="nav-icon far fa-envelope"></i>
                <p>Mails
                  @if(DB::table('contacts')->where('status', 0)->count() > 0)
                  <span
                    class="badge badge-warning navbar-badge">{{DB::table('contacts')->where('status', 0)->count()}}</span>
                  @endif
                </p>
              </a>
            </li>
          </ul>
        </li>

      </ul>
    </nav>
    <!-- /.sidebar-menu -->
  </div>
  <!-- /.sidebar -->
</aside>