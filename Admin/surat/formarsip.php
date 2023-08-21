<?php 
include "../koneksi.php";

$kategori = "";
$tanggal = "";
$id_surat = "";
$success = "";
$error = "";


if(isset($_GET['op'])){
  $op = $_GET['op'];
}else{
  $op = "";
}

if($op == 'edit'){
  $id          = $_GET['id'];
  $sql5        = "SELECT * FROM tb_arsip where id = '$id'";
  $q5          = mysqli_query($conn, $sql5);
  $r5          = mysqli_fetch_array($q5);
  $id_surat    = $r5['id_surat'];
  $kategori    = $r5['kategori'];
  $tanggal     = $r5['tanggal'];
 
  if($id_surat == ''){
      $error = "Data tidak ditemukan";
  }
}

if (isset($_POST['submit'])) {

      $id_surat = $_POST['id_surat'];
      $kategori = $_POST['kategori'];
      $tanggal = $_POST['tanggal'];

  if($id_surat && $kategori && $tanggal){

    if($op == 'edit'){ //untuk update
      $sql3 = "UPDATE tb_arsip set id_surat = '$id_surat', kategori = '$kategori', tanggal = '$tanggal' where id = '$id'";
      $q3   = mysqli_query($conn, $sql3);
      if($q3){
        header("Location: dataarsip.php");
      }else{
        $error = "Data gagal diupdate";
      }

  }else{ //untuk insert
      $sql3 = "INSERT INTO tb_arsip(id_surat, kategori, tanggal) VALUES('$id_surat', '$kategori', '$tanggal')";
      $result3 = mysqli_query($conn, $sql3);
      
           if ($result3) {
            $success ="Anda berhasil mengarsipkan surat";
           }else {
	          $error="Anda Gagal mengarsipkan surat";
           }
          }
}else{
  $error = "silakan isi semua form";
}
}
  ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>SI DESA||Form Surat</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="../../SIDESA/plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Tempusdominus Bootstrap 4 -->
  <link rel="stylesheet" href="../../SIDESA/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="../../SIDESA/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- JQVMap -->
  <link rel="stylesheet" href="../../SIDESA/plugins/jqvmap/jqvmap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../../SIDESA/dist/css/adminlte.min.css">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="../../SIDESA/plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="../../SIDESA/plugins/daterangepicker/daterangepicker.css">
  <!-- summernote -->
  <link rel="stylesheet" href="../../SIDESA/plugins/summernote/summernote-bs4.min.css">
</head>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">

  <!-- Preloader -->
  <div class="preloader flex-column justify-content-center align-items-center">
    <img class="animation__shake" src="../../user/clogo.png" alt="AdminLTELogo" height="60" width="60">
  </div>

  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <h5><a href="#" class="nav-link">Contact</a></h5>
      </li>
    </ul>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">      
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
    <a href="index3.html" class="brand-link">
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
            <a href="../indexadmin.php" class="nav-link">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Dashboard
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-th"></i>
              <p>
                Informasi
                <span class="right badge badge-danger">Terbaru</span>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="../informasi/datainformasi.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Lihat Informasi</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="../informasi/forminformasi.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Input Informasi</p>
                </a>
              </li>
            </ul>
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
                <a href="../pemasaran/datapemasaran.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Lihat Pemasaran</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="../pemasaran/ajupemasaran.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Ajukan Pemasaran</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link active">
              <i class="nav-icon fas fa-copy"></i>
              <p>
                Tools Surat
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="dataarsip.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Data Arsip Surat</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="datasurat.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Data Pengajuan Surat</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="formarsip.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Form Arsip Surat</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item">
            <a href="../logout.php" class="nav-link">
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
  <div class="content-wrapper">
      <!-- Content Header (Page header) -->
      <section class="content-header">
        <div class="container-fluid">
          <div class="row mb-2">
            <div class="col-sm-6 text-center">
              <h1>Form Pengajuan Surat</h1>
            </div>
          </div>
        </div><!-- /.container-fluid -->
      </section>
  <!-- form pemasaran -->
     <!-- Main content -->
     <section class="content">
      <div class="container-fluid">
        <div class="row">
          <!-- left column -->
          <div class="col-md-6">
            <!-- general form elements -->
            <div class="card card-info">
              <div class="card-header">
                <h3 class="card-title">Isi Formulir dengan Lengkap</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form action="" method="POST">
                <div class="card-body">

                 <!-- pesan error -->
                 <?php if($error){?>
                    <div class="alert alert-danger" role="alert">
                        <?php echo $error?>
                    </div>
                  <?php } ?>

                  <!-- pesan sukses -->
                  <?php if($success){?>
                    <div class="alert alert-success" role="alert">
                        <?php echo $success ?>
                    </div>
                  <?php } ?>
                
                  <div class="form-group">
                    <label for="id_surat">id_surat</label>
                    <input type="number" name="id_surat" class="form-control" id="id_surat" value="<?php echo $tanggal ?>">
                  </div>
                  <div class="form-group">
                    <label for="Kategori">kategori</label>
                    <select name="kategori" id="kategori" class="form-control" value="<?php echo $kategori ?>">
                        <option value="Masuk">Masuk</option>
                        <option value="Keluar">Keluar</option>
                    </select>
                  </div>
                  <div class="form-group">
                    <label for="tanggal">Tanggal</label>
                    <input type="date" name="tanggal" class="form-control" id="tanggal" value="<?php echo $tanggal ?>">
                  </div>
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" name="submit" class="btn btn-info">Submit</button>
                </div>
              </form>
            </div>
            <!-- /.card -->
    </section>
  <!-- form pemasaran -->
  </div>
  <!-- /.content-wrapper -->
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
<script src="../../SIDESA/plugins/jquery/jquery.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="../../SIDESA/plugins/jquery-ui/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button)
</script>
<!-- Bootstrap 4 -->
<script src="../../SIDESA/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- ChartJS -->
<script src="../../SIDESA/plugins/chart.js/Chart.min.js"></script>
<!-- Sparkline -->
<script src="../../SIDESA/plugins/sparklines/sparkline.js"></script>
<!-- JQVMap -->
<script src="../../SIDESA/plugins/jqvmap/jquery.vmap.min.js"></script>
<script src="../../SIDESA/plugins/jqvmap/maps/jquery.vmap.usa.js"></script>
<!-- jQuery Knob Chart -->
<script src="../../SIDESA/plugins/jquery-knob/jquery.knob.min.js"></script>
<!-- daterangepicker -->
<script src="../../SIDESA/plugins/moment/moment.min.js"></script>
<script src="../../SIDESA/plugins/daterangepicker/daterangepicker.js"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="../../SIDESA/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
<!-- Summernote -->
<script src="../../SIDESA/plugins/summernote/summernote-bs4.min.js"></script>
<!-- overlayScrollbars -->
<script src="../../SIDESA/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
<!-- AdminLTE App -->
<script src="../../SIDESA/dist/js/adminlte.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="../../SIDESA/dist/js/demo.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="../../SIDESA/dist/js/pages/dashboard.js"></script>
</body>
</html>