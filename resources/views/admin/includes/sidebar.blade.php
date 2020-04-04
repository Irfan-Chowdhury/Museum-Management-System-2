  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
      <img src="{{asset('admin/admin-lte/dist/img/AdminLTELogo.png')}}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
           style="opacity: .8">
      <span class="brand-text font-weight-light">AdminLTE 3</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="{{asset(Auth::user()->photo)}}" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">{{Auth::user()->name}}</a>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
         
          <li class="nav-item has-treeview menu-open">
            <a href="#" class="nav-link active">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Starter Pages
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
          </li>

          <!--Admin-->
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-user-secret"></i>
              <p>
                Admins Info
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{route('admin-create')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Add New Admin</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{route('admin-list')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Admins List</p>
                </a>
              </li>
            </ul>
          </li>
          
          <!--Notice-->
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-bullhorn"></i>
              <p>
                Notice
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{route('notice-create')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Add New Notice</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{route('notice-list')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Notice Manage</p>
                </a>
              </li>
            </ul>
          </li>

          <!-- Rules -->
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fa fa-gavel"></i>
              <p>
                Rules
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{route('rule-create')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Add New Rule</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{route('rule-list')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Rule Manage</p>
                </a>
              </li>
            </ul>
          </li>
          
          <!-- Museum -->
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-home"></i>
              {{-- <i class="fas fa-house"></i> --}}
              <p>
                Museum
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{route('museum-create')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Add Museum Info</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{route('museum-manage')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Museum Manage</p>
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
