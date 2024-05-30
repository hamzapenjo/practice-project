<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <link rel="apple-touch-icon" sizes="76x76" href="{{asset("/img/apple-icon.png")}}"> 
  <link rel="icon" type="image/png" href="{{asset("/img/favicon.png")}}">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <title>
    Admin
  </title>
  <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
  <!--     Fonts and icons     -->
  <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet" />
  <link href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" rel="stylesheet">
  <!-- CSS Files -->
  @vite(['resources/css/bootstrap.min.css', 'resources/css/paper-dashboard.css?v=2.0.1'])
</head>

<body class="">
  <div class="wrapper ">
    <div class="sidebar" data-color="white" data-active-color="danger">
      <div class="logo">
        <a href="https://www.creative-tim.com" class="simple-text logo-mini">
          <!-- <div class="logo-image-small">
            <img src="./assets/img/logo-small.png">
          </div> -->
          <!-- <p>CT</p> -->
        </a>
        <a href="https://www.creative-tim.com" class="simple-text logo-normal">
          Your Logo
          {{-- <div class="logo-image-big">
            <img src="../assets/img/logo-big.png">
          </div>  --}}
        </a>
      </div>
      <div class="sidebar-wrapper">
        <ul class="nav">
            <li class="{{ $activePage == 'dashboard' ? 'active' : '' }}">
                <a href="{{ route('admin-dashboard') }}">
                  <i class="nc-icon nc-bank"></i>
                  <p>Dashboard</p>
                </a>
              </li>
          <li class="{{ $activePage == 'practices' ? 'active' : '' }}">
            <a href="{{ route('admin-practice') }}">
              <i class="nc-icon nc-bullet-list-67"></i>
              <p>Practices</p>
            </a>
          </li>
          <li class="{{ $activePage == 'fields' ? 'active' : '' }}">
            <a href="{{ route('admin-fields') }}">
              <i class="nc-icon nc-bullet-list-67"></i>
              <p>Fields of practice</p>
            </a>
          </li>
          <li>
            <a href="javascript:;">
              <i class="nc-icon nc-pin-3"></i>
              <p>Third Item</p>
            </a>
          </li>
        </ul>
      </div>
    </div>
    <div class="main-panel" style="height: 100vh;">
      <!-- Navbar -->
      <nav class="navbar navbar-expand-lg navbar-absolute fixed-top navbar-transparent">
        <div class="container-fluid">
          <div class="navbar-wrapper">
            <div class="navbar-toggle">
              <button type="button" class="navbar-toggler">
                <span class="navbar-toggler-bar bar1"></span>
                <span class="navbar-toggler-bar bar2"></span>
                <span class="navbar-toggler-bar bar3"></span>
              </button>
            </div>
            <a class="navbar-brand" href="javascript:;">Title</a>
          </div>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navigation" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-bar navbar-kebab"></span>
            <span class="navbar-toggler-bar navbar-kebab"></span>
            <span class="navbar-toggler-bar navbar-kebab"></span>
          </button>
          <div class="collapse navbar-collapse justify-content-end" id="navigation">
            <form>
              <div class="input-group no-border">
                <input type="text" value="" class="form-control" placeholder="Search...">
                <div class="input-group-append">
                  <div class="input-group-text">
                    <i class="nc-icon nc-zoom-split"></i>
                  </div>
                </div>
              </div>
            </form>
            <ul class="navbar-nav">
              <li class="nav-item btn-rotate dropdown">
                <a class="nav-link dropdown-toggle" href="http://example.com" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  <i class="nc-icon nc-bell-55"></i>
                  <p>
                    <span class="d-lg-none d-md-block">Some Actions</span>
                  </p>
                </a>
                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink">
                  <a class="dropdown-item" href="#">Action</a>
                  <a class="dropdown-item" href="#">Another action</a>
                  <a class="dropdown-item" href="#">Something else here</a>
                </div>
              </li>
            </ul>
          </div>
        </div>
      </nav>
      <!-- End Navbar -->
      <div class="content">
        @yield('section')
      </div>
      <footer class="footer" style="position: absolute; bottom: 0; width: -webkit-fill-available;">
        <div class="container-fluid">
        </div>
      </footer>
    </div>
  </div>
  <!--   Core JS Files   -->
  @vite([
    'resources/js/core/jquery.min.js',
    'resources/js/core/popper.min.js',
    'resources/js/core/bootstrap.min.js',
    'resources/js/plugins/perfect-scrollbar.jquery.min.js',
    'resources/js/plugins/chartjs.min.js',
    'resources/js/plugins/bootstrap-notify.js',
    'resources/js/paper-dashboard.min.js?v=2.0.1',
    'resources/js/confirm-delete.js'
    ])
</body>

</html>
