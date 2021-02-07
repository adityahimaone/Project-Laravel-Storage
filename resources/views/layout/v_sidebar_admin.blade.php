<nav class="mt-2">
    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
      <!-- Add icons to the links using the .nav-icon class
           with font-awesome or any other icon font library -->
      <li class="nav-item">
        <a href="/admin" class="nav-link {{request()->is('admin') ? 'active' : ''}} ">
          <i class="nav-icon fas fa-tachometer-alt"></i>
          <p>
            Dashboard
          </p>
        </a>
      </li>
      <li class="nav-item">
        <a href="/admin_about" class="nav-link {{request()->is('admin_about') ? 'active' : ''}}">
          <i class="nav-icon fas fa-code"></i>
          <p>
            About
          </p>
        </a>
      </li>
      <li class="nav-item">
        <a href="/storage" class="nav-link {{request()->is('storage') ? 'active' : ''}}">
          <i class="nav-icon fas fa-boxes"></i>
          <p>Storage</p>
        </a>
      </li>
      <li class="nav-item">
        <a href="https://adminlte.io/docs/3.1/" class="nav-link">
          <i class="nav-icon fas fa-file"></i>
          <p>Documentation</p>
        </a>
      </li>
    </ul>
  </nav>