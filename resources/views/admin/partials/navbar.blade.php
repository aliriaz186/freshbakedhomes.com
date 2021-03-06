<!-- Navbar -->
<nav class="main-header navbar navbar-expand navbar-dark">
  <!-- Left navbar links -->
  <ul class="navbar-nav">
    <li class="nav-item">
      <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
    </li>
    <li class="nav-item d-none d-sm-inline-block">
      <a href="/" class="nav-link">Home</a>
    </li>
  </ul>

  <!-- SEARCH FORM -->
  <form class="form-inline ml-3">
    <div class="input-group input-group-sm">
      <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
      <div class="input-group-append">
        <button class="btn btn-navbar" type="submit">
          <i class="fas fa-search"></i>
        </button>
      </div>
    </div>
  </form>

  <!-- Right navbar links -->
  <ul class="navbar-nav ml-auto">

    <!-- Notifications Dropdown Menu -->
    <li class="nav-item dropdown">
      <a class="nav-link" data-toggle="dropdown" href="#">
        <i class="far fa-bell"></i>
        @if(DB::table('contacts')->where('status', 0)->count() > 0)
        <span class="badge badge-warning navbar-badge">{{DB::table('contacts')->where('status', 0)->count()}}</span>
        @endif
      </a>
      <a href="{{ route('contact.index') }}">
        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
          <span class="dropdown-header">{{DB::table('contacts')->where('status', 0)->count()}} Unread Messages</span>
          <div class="dropdown-divider"></div>
        </div>
      </a>
    </li>
    {{-- Log out drop down --}}
    <li class="nav-item dropdown user user-menu">
      <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">
        <img src="/admin-assets/dist/img/user2-160x160.jpg" class="user-image img-circle elevation-2 alt=">
        <span class="hidden-xs"> {{Auth::user()->name}}</span>
      </a>
      <ul class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
        <!-- User image -->
        <li class="user-header sidebar-dark-primary text-white">
          <img src="/admin-assets/dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">

          <p>
            {{Auth::user()->name}}
            <small>Member since
              {{  Auth::user()->created_at->format('M Y')  }}</small>
          </p>
        </li>
        <li class="user-footer d-flex justify-content-between">
          <div class="pull-left">
            <a href="#" class="btn btn-default btn-flat">Profile</a>
          </div>
          <div class="pull-right">

            <form method="POST" action="{{ route('admin.logout') }}">
              @csrf
              <button type="submit" class="btn btn-default btn-flat">Sign out</button>
            </form>


          </div>
        </li>
      </ul>
    </li>
  </ul>
</nav>
<!-- /.navbar -->