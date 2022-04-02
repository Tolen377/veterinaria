<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Admin Dashboard</title>

  <link href="{{ asset('fonts/admin/all.min.css') }}" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
  <link href="{{ asset('css/admin.css') }}" rel="stylesheet">
  <link href="{{ asset('css/sb-admin-2.min.css') }}" rel="stylesheet">
  
  <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
  @yield('datatable-css')

</head>

<body id="page-top">
  <div id="wrapper">
    <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">
        <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
          <div class="sidebar-brand-icon rotate-n-15">
            <i class="fas fa-laugh-wink"></i>
          </div>
        </a>

        <hr class="sidebar-divider my-0">

        <li class="nav-item active">
          <a class="nav-link" href="index.html">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Panel</span></a>
        </li>

        <hr class="sidebar-divider">
        <div class="sidebar-heading">
          Interface
        </div>

        <li class="nav-item">
          <a class="nav-link" href="{{Route('Admin.gestionCitas')}}">
              <i class="fas fa-fw fa-chart-area"></i>
              <span>Citas</span></a>
          <a class="nav-link" href="{{Route('Admin.gestionProductos')}}">
              <i class="fas fa-fw fa-chart-area"></i>
              <span>Productos</span></a>    
        </li>

        <hr class="sidebar-divider d-none d-md-block">
        <div class="text-center d-none d-md-inline">
          <button class="rounded-circle border-0" id="sidebarToggle"></button>
        </div>
    </ul>
    <div id="content-wrapper" class="d-flex flex-column">
      <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
              <div class="container">
                  <div class="collapse navbar-collapse" id="navbarSupportedContent">
                      <ul class="navbar-nav ms-auto">
                              <li class="nav-item dropdown">
                                  <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                      {{ Auth::user()->name }}
                                  </a>

                                  <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                  <a class="dropdown-item" href="{{ route('logout') }}"
                                        onclick="event.preventDefault();
                                                      document.getElementById('logout-form').submit();">
                                          {{ __('Logout') }}
                                      </a>
                                      <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                          @csrf
                                      </form>
                                  </div>
                              </li>
                      </ul>
                  </div>
              </div>
        </nav>

      @yield('content')
    </div>
  </div>
  
  
  <script src="{{ asset('js/admin.js') }}"></script>
  <script src="{{ asset('js/app.js') }}" defer></script>
  <script src="{{ asset('js/sb-admin-2.min.js') }}"></script>
  <script src="{{ asset('js/jquery.min.js') }}"></script>
  <script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>
  <!-- Core plugin JavaScript-->
  <script src="{{ asset('js/jquery.easing.min.js') }}"></script>
  
  
  @yield('home-scripts')
  @yield('datatable-scripts')
</body>
</html>