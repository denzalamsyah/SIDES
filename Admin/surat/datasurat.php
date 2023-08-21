<?php
session_start();
include "../koneksi.php";

$succes = "";
$error = "";

if(isset($_GET['op'])){
    $op = $_GET['op'];
  }else{
    $op = "";
  }
if($op == 'delete'){
    $id = $_GET['id'];
    $sql5 = "DELETE FROM tb_surat where id = '$id'"; 
    $q5 = mysqli_query($conn, $sql5);
    if($q5){
        $succes = "Berhasil menghapus data";
    }else{
        $error = "Gagal menghapus data";
    }
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>SI DESA||Data Surat</title>

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
    <img class="animation__shake" src="../../user/clogo.png" alt="AdminLogo" height="60" width="60">
    <h5 class="animation_shake text-info">SI DESA CIPANCAR</h5>
  </div>

  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
      <!-- <li class="nav-item d-none d-sm-inline-block">
        <a href="index3.html" class="nav-link">Home</a>
      </li> -->
      <li class="nav-item d-none d-sm-inline-block">
        <h5><a href="#" class="nav-link">Contact</a></h5>
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
          <form class="form-inline" method="POST">
            <div class="input-group input-group-sm">
              <input class="form-control form-control-navbar" name="cari" type="text" placeholder="Search" aria-label="Search">
              <div class="input-group-append">
                <button class="btn btn-navbar" type="submit" name="search">
                  <i class="fas fa-search"></i>
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
      <img src="../../user/clogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">SI CIPANCAR</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- SidebarSearch Form -->
      <div class="form-inline">
        <div class="input-group" data-widget="sidebar-search">
          <input name="cari" class="form-control form-control-sidebar" type="search" placeholder="Search">
          <div class="input-group-append">
            <button type="submit" class="btn btn-sidebar">
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
                <i class="fas fa-angle-left right"></i>
                
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
                  <p>Input Pemasaran</p>
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
                <a href="#" class="nav-link">
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
    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Data Surat</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example2" class="table table-bordered table-hover">
                  <thead>
                  <tr>
                    <th scope="col" class="table-success text-center">NO</th>
                    <th scope="col" class="table-success text-center">ID Surat</th>
                    <th scope="col" class="table-success text-center">Nama Surat</th>
                    <th scope="col" class="table-success text-center">Tanggal</th>
                    <th scope="col" class="table-success text-center">NIK Pembuat</th>
                    <th scope="col" class="table-success text-center">Tujuan Surat</th>
                    <th scope="col" class="table-success text-center">Nama Pengirim</th>
                    <th scope="col" class="table-success text-center">Aksi</th>
                  </tr>
                  <body>
                    <?php
                    
                    if(isset($_POST['search'])){
                      $cari = $_POST['cari'];
                      $sql5 = "SELECT * FROM tb_surat where nama_surat like '%$cari%'order by id desc";
                    }else{
                      $sql5 = "SELECT * FROM tb_surat order by id desc"; 
                    }
                    
                    $q5   = mysqli_query($conn, $sql5);
                    $urut = 1;
                    while($r5 = mysqli_fetch_array($q5)){
                        $id       = $r5['id'];
                        $namsu    = $r5['nama_surat'];
                        $tanggal  = $r5['tanggal'];
                        $nikpe    = $r5['NIK_pembuat'];
                        $tusu     = $r5['tujuan_surat'];
                        $nape     = $r5['nama_pengirim'];
                        ?>

                        <tr>
                            <td scope="row" class="text-center"><?php echo $urut++ ?></td>
                            <td scope="row" class="text-center"><?php echo $id ?></td>
                            <td scope="row" class="text-center"><?php echo $namsu ?></td>
                            <td scope="row" class="text-center"><?php echo $tanggal ?></td>
                            <td scope="row" class="text-center"><?php echo $nikpe ?></td>
                            <td scope="row" class="text-center"><?php echo $tusu ?></td>
                            <td scope="row" class="text-center"><?php echo $nape ?></td>
                            <td scope="row" class="text-center">
                                <a href="ajusurat.php?op=edit&id=<?php echo $id?>"><button type="button" class="btn btn-warning">Edit</button></a>
                                <a href="datasurat.php?op=delete&id=<?php echo $id?>" onclick="return confirm('Yakin mau menghapus data?')"><button type="button" class="btn btn-danger">Delete</button></a>
                                <a href="ajusurat.php"><button type="button" class="btn btn-success">Tambah</button></a>
                                <a href="formarsip.php"><button type="button" class="btn btn-info">Arsipkan</button></a>
                                <button onclick="window.print()" class="btn btn-primary">Cetak</button>
                            </td>
                        </tr>
                        <?php
                    }
                    ?>
                  </body>
                  </thead>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div>
      <!-- /.container-fluid -->
    </section>
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