
 <!-- Main Sidebar Container -->
 <aside class="main-sidebar sidebar-light-primary elevation-4 overflow-auto">
    <!-- Brand Logo -->
    <a href="" class="brand-link">
      <p>Packt Book Store</p>
       <span class="brand-text font-weight-light" ></span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="{{Auth::user()->getProfilePicAttribute()}}" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">{{ucfirst(Auth::user()->name)}}</a>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
        
          <li class="nav-item">
            <a href="{{ route('books.index') }}" class="nav-link {{ (Request::segment(2) == 'books') ? 'active' : '' }}">
            <i class="nav-icon fas fa-book"></i>
              <p>
                Books
              </p>
            </a>
          </li>              
         </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>
