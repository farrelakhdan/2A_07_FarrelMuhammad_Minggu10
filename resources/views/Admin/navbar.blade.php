<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>BIODATA</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">

  <!-- Bootstrap 4.6.0 -->
  <link href="{{ asset('LTE/plugins/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css" />
  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="{{ asset('LTE/plugins/fontawesome-free/css/all.min.css') }}">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="{{ asset('LTE/plugins/overlayScrollbars/css/OverlayScrollbars.min.css') }}">

  @yield('link_rel')

  <!-- Bootstrap4 Duallistbox -->
  <!-- <link rel="stylesheet" href="{{ asset('LTE/plugins/bootstrap4-duallistbox/bootstrap-duallistbox.min.css') }}"> -->

  <!-- Theme style -->
  <link rel="stylesheet" href="{{ asset('LTE/dist/css/adminlte.min.css') }}">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link href="{{ asset('LTE/dist/css/skins/_all-skins.min.css') }}" rel="stylesheet" type="text/css" />
  
</head>
<!-- layout-footer-fixed -->
<!-- dark-mode  -->
<body class="hold-transition dark-mode sidebar-mini layout-fixed layout-navbar-fixed layout-footer-fixed text-sm">
  <div class="wrapper">

  <!-- Preloader -->
  <div class="preloader flex-column justify-content-center align-items-center">
    <img class="animation__wobble" src="LTE/dist/img/logo.png" alt="MarisaLogo" height="60" width="60">
  </div>

  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-dark">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="#" class="nav-link"> Sistem Informasi OUTCOME BASED EDUCATION</a>
      </li>
    </ul>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">

      <!-- Messages Dropdown Menu -->
      <li class="nav-item dropdown">
        <a class="nav-link" data-toggle="dropdown" href="#">
          <i class="far fa-comments"></i>
          <span class="badge badge-danger navbar-badge">0</span>
        </a>
      </li>

      <!-- Notifications Dropdown Menu -->
      <li class="nav-item dropdown">
        <a class="nav-link" data-toggle="dropdown" href="#">
          <i class="far fa-bell"></i>
          <span class="badge badge-warning navbar-badge">1</span>
        </a>
      </li>

      <li class="nav-item">
        <a class="nav-link" href="adminLogout" role="button">
          <td><span class="badge badge-danger"> <i class="fa fa-power-off"></i> LogOut </span></td>
        </a>
      </li>

    </ul>
  </nav>

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="#" class="brand-link">
      <img src="foto1.jpeg" alt="Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">ADMIN</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column nav-child-indent" data-widget="treeview" role="menu" data-accordion="false">
 
          <li class="nav-item">
            <a href="admin" class="nav-link">
              <i class="nav-icon fas fa-street-view text-warning"></i>
              <p>DATA USER</p>
            </a>
          </li>


        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
        @yield('title')
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
        @yield('content')
     </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->

  <!-- Main Footer -->
  <footer class="main-footer small-text">
    <strong>Copyright &copy; 2021 <a href="#">Arriansoft</a>.</strong>
    All rights reserved.
    <div class="float-right d-none d-sm-inline-block">
      <b>Version</b> 3.1.0
    </div>
  </footer>
</div>
  <!-- ./wrapper -->

  <!-- jQuery -->
  <script src="{{ asset('LTE/plugins/jquery/jquery.min.js') }}"></script>
  <!-- Bootstrap 4.6.0 -->
  <script src="{{ asset('LTE/plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
  <!-- overlayScrollbars -->
  <script src="{{ asset('LTE/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js') }}"></script>
  <!-- jQuery Mapael -->
  <script src="{{ asset('LTE/plugins/jquery-mousewheel/jquery.mousewheel.js') }}"></script>
  <script src="{{ asset('LTE/plugins/raphael/raphael.min.js') }}"></script>
  <script src="{{ asset('LTE/plugins/jquery-mapael/jquery.mapael.min.js') }}"></script>
  <script src="{{ asset('LTE/plugins/jquery-mapael/maps/usa_states.min.js') }}"></script>
  <!-- ChartJS -->
  <script src="{{ asset('LTE/plugins/chart.js/Chart.min.js') }}"></script>

  @yield('script_src')

  <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
  <script src="{{ asset('LTE/dist/js/pages/dashboard2.js') }}"></script>
  <!-- AdminLTE App -->
  <script src="{{ asset('LTE/dist/js/adminlte.js') }}"></script>
  <!-- AdminLTE for demo purposes -->
  <script src="{{ asset('LTE/dist/js/demo.js') }}"></script>

  <script>
    function funUang2Float($nNom) {
      $nNom = $nNom.replace('.','')
      $nNom = $nNom.replace('.','')
      $nNom = $nNom.replace('.','')
      $nNom = $nNom.replace(',','.')
      return  parseFloat($nNom);
    }
  </script>
  @yield('script_e')


</body>
</html>
