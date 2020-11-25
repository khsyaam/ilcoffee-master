  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
      {{-- <img src="{{ ('/dashboard') }}/dist/img/favicon.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
           style="opacity: .8"> --}}
      <span class="brand-text font-weight-light">Dashboard Ilcoffee</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item">
            <a href="{!! route('home') !!}" class="nav-link {{ (request()->is('home*'))?'active':'' }}">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Dashboard
                {{-- <i class="right fas fa-angle-left"></i> --}}
              </p>
            </a>
          </li>
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link {{ (request()->is(['adminproduk*','adminprodukap*']))?'active':'' }}">
              <i class="nav-icon fas fa-users"></i>
              <p>
                Produk
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{ url('/adminproduk') }}" class="nav-link {{ (request()->is('adminproduk*'))?'active':'' }} ">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Beans</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ url('/adminprodukap') }}" class="nav-link {{ (request()->is('adminprodukap*'))?'active':'' }}">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Apparel</p>
                </a>
              </li>
            </ul>
          </li>
          {{-- <li class="nav-header">EXAMPLES</li> --}}
          <li class="nav-item">
            <a href="{{ url('/masukan') }}" class="nav-link {{ (request()->is('masukan*'))?'active':'' }}">
              <i class="nav-icon far fa-envelope"></i>
              <p>
                Checkout
              </p>
            </a>
          </li>
          <li class="nav-header">Admin</li>
          <li class="nav-item">
            <a href="{{ url('/logout') }}" class="nav-link">
              <i class="nav-icon far fa-window-close"></i>
              <p>
                Logout
              </p>
            </a>
          </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>