<?php 
// session_start();
 
// if (!isset($_SESSION['nama'])) {
//     header("Location: ceklogin.php");
// }
 
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>SI DESA||Program Desa</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="../SIDESA/plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Tempusdominus Bootstrap 4 -->
  <link rel="stylesheet" href="../SIDESA/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="../SIDESA/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- JQVMap -->
  <link rel="stylesheet" href="../SIDESA/plugins/jqvmap/jqvmap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../SIDESA/dist/css/adminlte.min.css">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="../SIDESA/plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="../SIDESA/plugins/daterangepicker/daterangepicker.css">
  <!-- summernote -->
  <link rel="stylesheet" href="../SIDESA/plugins/summernote/summernote-bs4.min.css">
</head>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">

  <!-- Preloader -->
  <div class="preloader flex-column justify-content-center align-items-center">
    <img class="animation__shake" src="clogo.png" alt="AdminLTELogo" height="60" width="60">
    <h5 class="animation_shake text-info">SI DESA CIPANCAR</h5>
  </div>

  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
      
      <li class="nav-item d-none d-sm-inline-block">
        <h5><a href="contact.php" class="nav-link">Contact</a></h5>
      </li>
    </ul>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
      <!-- Navbar Search -->
      <li class="nav-item">
        <a class="nav-link" data-widget="navbar-search" href="#" role="button">
          <i class="fas fa-search"></i>
        </a>
        <div class="navbar-search-block">
          <form class="form-inline">
            <div class="input-group input-group-sm">
              <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
              <div class="input-group-append">
                <button class="btn btn-navbar" type="submit">
                  <i class="fas fa-search"></i>
                </button>
                <button class="btn btn-navbar" type="button" data-widget="navbar-search">
                  <i class="fas fa-times"></i>
                </button>
              </div>
            </div>
          </form>
        </div>
      </li>

      
      <li class="nav-item">
        <a class="nav-link" data-widget="control-sidebar" data-controlsidebar-slide="true" href="#" role="button">
          <i class="fas fa-th-large"></i>
        </a>
      </li>
    </ul>
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="#" class="brand-link">
      <img src="clogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">SI CIPANCAR</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">

      <!-- SidebarSearch Form -->
      <div class="form-inline">
        <div class="input-group" data-widget="sidebar-search">
          <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
          <div class="input-group-append">
            <button class="btn btn-sidebar">
              <i class="fas fa-search fa-fw"></i>
            </button>
          </div>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item menu-open">
            <a href="#" class="nav-link active">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Dashboard
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="informasiuser.php" class="nav-link">
              <i class="nav-icon fas fa-th"></i>
              <p>
                Informasi
                <span class="right badge badge-danger">Terbaru</span>
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-edit"></i>
              <p>
                Pemasaran
                <i class="fas fa-angle-left right"></i>
                <span class="badge badge-info right">6</span>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="pages/layout/top-nav.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Lihat Pemasaran</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="ajupemasaran.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Ajukan Pemasaran</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item">
            <a href="ajusurat.php" class="nav-link">
              <i class="nav-icon fas fa-copy"></i>
              <p>
                Buat Pengajuan Surat
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="logout.php" class="nav-link">
              <i class="far fa-circle nav-icon"></i>
              <p>
                LogOut
              </p>
            </a>
          </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>
        <!-- tabel -->
    <div class="content-wrapper">
        <section class="content">
        <!-- Content Header (Page header) -->
            <div class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="card">
                            <div class="card-header">
                                <h3 class="card-title">Program Desa Cipancar</h3>
                            </div>

                            <div class="card-body">
                                <table id="example1" class="table table-bordered">
                                    <thead>
                                        <tr>
                                            <th scope="col" class="table-success text-center">No</th>
                                            <th scope="col" class="table-success text-center">Nama Program</th>
                                            <th scope="col" class="table-success text-center">Informasi Program</th>
                                            <th scope="col" class="table-success text-center">Waktu Pelaksanaan</th>
                                            <th scope="col" class="table-success text-center">Keterangan</th>
                                        </tr>
                                    </thead>
                                        <tbody>
                                        <tr>
                                            <td scope="row" class="text-center">1</td>
                                            <td scope="row" class="text-center">
                                            Desa Mandiri BPJS
                                            </td scope="row" class="text-center">
                                            <td ><p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Eum iusto, adipisci unde mollitia laudantium quae accusamus veniam animi necessitatibus eos eveniet alias ab explicabo eligendi dignissimos ullam facilis ut vel.</p></td>
                                            <td scope="row" class="text-center">20 September 2022</td>
                                        </tr>
                                        <tr>
                                            <td scope="row" class="text-center">2</td>
                                            <td scope="row" class="text-center">
                                            Teknologi Sumur untuk Persediaan Air di Desa
                                            </td scope="row" class="text-center">
                                            <td ><p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Eum iusto, adipisci unde mollitia laudantium quae accusamus veniam animi necessitatibus eos eveniet alias ab explicabo eligendi dignissimos ullam facilis ut vel.</p></td>
                                            <td scope="row" class="text-center">20 Desember 2022</td>
                                        </tr>
                                        <tr>
                                            <td scope="row" class="text-center">1</td>
                                            <td scope="row" class="text-center">
                                            Pembangunan jalan
                                            </td scope="row" class="text-center">
                                            <td ><p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Eum iusto, adipisci unde mollitia laudantium quae accusamus veniam animi necessitatibus eos eveniet alias ab explicabo eligendi dignissimos ullam facilis ut vel.</p></td>
                                            <td scope="row" class="text-center">10 Maret 2023</td>
                                        </tr>
                                        <tr>
                                            <td scope="row" class="text-center">1</td>
                                            <td scope="row" class="text-center">
                                            Keluarga Tani
                                            </td scope="row" class="text-center">
                                            <td ><p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Eum iusto, adipisci unde mollitia laudantium quae accusamus veniam animi necessitatibus eos eveniet alias ab explicabo eligendi dignissimos ullam facilis ut vel.</p></td>
                                            <td scope="row" class="text-center">20 September 2023</td>
                                        </tr>

                                        </tbody>
                                    </thead>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
        <footer class="main-footer">
            <strong>Copyright &copy; 2022 <a href="#">Rizwan Alamsyah</a>.</strong>
        </footer>


  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="../SIDESA/plugins/jquery/jquery.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="../SIDESA/plugins/jquery-ui/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button)
</script>
<!-- Bootstrap 4 -->
<script src="../SIDESA/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- ChartJS -->
<script src="../SIDESA/plugins/chart.js/Chart.min.js"></script>
<!-- Sparkline -->
<script src="../SIDESA/plugins/sparklines/sparkline.js"></script>
<!-- JQVMap -->
<script src="../SIDESA/plugins/jqvmap/jquery.vmap.min.js"></script>
<script src="../SIDESA/plugins/jqvmap/maps/jquery.vmap.usa.js"></script>
<!-- jQuery Knob Chart -->
<script src="../SIDESA/plugins/jquery-knob/jquery.knob.min.js"></script>
<!-- daterangepicker -->
<script src="../SIDESA/plugins/moment/moment.min.js"></script>
<script src="../SIDESA/plugins/daterangepicker/daterangepicker.js"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="../SIDESA/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
<!-- Summernote -->
<script src="../SIDESA/plugins/summernote/summernote-bs4.min.js"></script>
<!-- overlayScrollbars -->
<script src="../SIDESA/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
<!-- AdminLTE App -->
<script src="../SIDESA/dist/js/adminlte.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="../SIDESA/dist/js/demo.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="../SIDESA/dist/js/pages/dashboard.js"></script>
</body>
</html>
