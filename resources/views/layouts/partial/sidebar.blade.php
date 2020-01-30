<!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
      <img src="{{ asset('backend/img/logo.png') }}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
           style="opacity: .8">
      <span class="brand-text font-weight-light">Admin</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="{{ asset('backend/img/user.jpg') }}" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="{{ Route('about.index')}}" class="d-block">Steve Nyanumba</a>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item">
            <a href="{{ Route('admin.dashboard') }}" @if (Request::is('admin/dashboard'))
                class="nav-link active"
            @else
                class="nav-link"
            @endif>
              <i class="nav-icon fas fa-th"></i>
              <p>
                Dashboard
                {{-- <span class="right badge badge-danger">New</span> --}}
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{ Route('contact.index') }}"  @if (Request::is('admin/dashboard/Contacts'))
                class="nav-link active"
            @else
                class="nav-link"
            @endif>
              <i class="nav-icon fas fa-list-alt"></i>
              <p>
                Contacts
                {{-- <span class="right badge badge-danger">New</span> --}}
              </p>
            </a>
          </li>
          <li class="nav-item has-treeview">
            <a @if (Request::is('admin/dashboard/profile*'))
                class="nav-link active"
            @else
                class="nav-link"
            @endif>
              <i class="nav-icon fas fa-id-card"></i>
              <p>
                My Profile
                {{-- <span class="right badge badge-danger">New</span> --}}
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{ Route('about.index') }}" @if (Request::is('admin/AboutMe*'))
                class="nav-link active"
            @else
                class="nav-link"
            @endif>
                  <i class="far fa-user-circle nav-icon"></i>
                  <p>About Me</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ Route('education.index') }}" @if (Request::is('admin/education*'))
                class="nav-link active"
            @else
                class="nav-link"
            @endif>
                  <i class="fas fa-font nav-icon"></i>
                  <p>Education</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ Route('experience.index') }}" @if (Request::is('admin/experience*'))
                class="nav-link active"
            @else
                class="nav-link"
            @endif>
                  <i class="fas fa-tasks nav-icon"></i>
                  <p>Experience</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ Route('resume.index') }}" @if (Request::is('admin/Resume*'))
                class="nav-link active"
            @else
                class="nav-link"
            @endif>
                  <i class="fas fa-th-list nav-icon"></i>
                  <p>Resume</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ Route('skills.store') }}" @if (Request::is('admin/Skills*'))
                class="nav-link active"
            @else
                class="nav-link"
            @endif>
                  <i class="fas fa-wrench nav-icon"></i>
                  <p>Skills</p>
                </a>
              </li>
            </ul>
          </li>

          <li class="nav-item">
            <a href="#"@if (Request::is('admin/portfolio*'))
                class="nav-link active"
            @else
                class="nav-link"
            @endif>
              <i class="nav-icon fas fa-th"></i>
              <p>
                Portfolio
                {{-- <span class="right badge badge-danger">New</span> --}}
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="#" @if (Request::is('admin/post'))
                class="nav-link active"
            @else
                class="nav-link"
            @endif>
              <i class="nav-icon fas fa-th"></i>
              <p>
                Blog
                {{-- <span class="right badge badge-danger">New</span> --}}
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="#" @if (Request::is('admin/testimonials'))
                class="nav-link active"
            @else
                class="nav-link"
            @endif>
              <i class="nav-icon fas fa-th"></i>
              <p>
                Testimonials
                {{-- <span class="right badge badge-danger">New</span> --}}
              </p>
            </a>
          </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>
