<?php
session_start();
include "../koneksi.php";

$nama = "";
$jenis_kelamin = "";
$alamat = "";
$no_telepon = "";
$email = "";
$jabatan = "";
$status = "";
$masa_jabatan = "";
$error = "";
$success = "";

if(isset($_GET['op'])){
    $op = $_GET['op'];
  }else{
    $op = "";
  }
if($op == 'delete'){ //untuk delete
    $id = $_GET['id'];
    $sql6 = "DELETE FROM tb_struktur where id = '$id'"; 
    $q6 = mysqli_query($conn, $sql6);
    if($q6){
        $success = "Berhasil menghapus data";
    }else{
        $error = "Gagal menghapus data";
    }
}

if(isset($_GET['op'])){
  $op = $_GET['op'];
}else{
  $op = "";
}

if($op == 'edit'){ //untuk edit
  $id          = $_GET['id'];
  $sql6        = "SELECT * FROM tb_struktur where id = '$id'";
  $q6          = mysqli_query($conn, $sql6);
  $r6          = mysqli_fetch_array($q6);
  $nama        = $r6['nama'];
  $jenis_kelamin    = $r6['j_kelamin'];
  $alamat           = $r6['alamat'];
  $no_telepon       = $r6['no_telepon'];
  $email            = $r6['email'];
  $jabatan          = $r6['jabatan'];
  $status           = $r6['status'];
  $masa_jabatan     = $r6['masa_jabatan'];

  

  if($nama == ''){
      $error = "Data tidak ditemukan";
  }
}

if (isset($_POST['submit'])) {

      $nama = $_POST['nama'];
      $jenis_kelamin= $_POST['jenis_kelamin'];
      $alamat       = $_POST['alamat'];
      $no_telepon   = $_POST['no_telepon'];
      $email        = $_POST['email'];
      $jabatan      = $_POST['jabatan'];
      $status       = $_POST['status'];
      $masa_jabatan = $_POST['masa_jabatan'];
      

  if($nama && $jenis_kelamin && $alamat && $no_telepon && $email && $jabatan && $status && $masa_jabatan){

    if($op == 'edit'){ //untuk update
      $sql6 = "UPDATE tb_struktur set nama = '$nama', j_kelamin = '$jenis_kelamin', alamat = '$alamat',
      no_telepon = '$no_telepon', email = '$email', jabatan = '$jabatan', status = '$status', masa_jabatan = '$masa_jabatan' where id = '$id'";
      $q6   = mysqli_query($conn, $sql6);
      if($q6){
        header("Location: struktural.php");
      }else{
        $error = "Data gagal diupdate";
      }

  }else{ //untuk insert
      $sql6 = "INSERT INTO tb_struktur(nama, j_kelamin, alamat, no_telepon, email, jabatan, status, masa_jabatan)
      VALUES('$nama', '$jenis_kelamin', '$alamat', '$no_telepon', '$email', '$jabatan', '$status', '$masa_jabatan')";
      $result6 = mysqli_query($conn, $sql6);
      
           if ($result6) {
            $success ="Anda berhasil memasukan data";
           }else {
	          $error="Anda Gagal memasaukan data";
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
  <title>SI DESA||Struktural</title>

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
            <a href="../indexadmin.php" class="nav-link active">
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
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-copy"></i>
              <p>
                Tools Surat
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="../surat/dataarsip.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Data Arsip Surat</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="../surat/datasurat.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Data Pengajuan Surat</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="../surat/formarsip.php" class="nav-link">
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
              <h1>Struktural Pemerintahan Desa Cipancar</h1>
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
                    <label for="nama surat">Nama</label>
                    <input type="text" name="nama" class="form-control" id="nama" placeholder="masukan nama" value="<?php echo $nama ?>">
                  </div>
                  <div class="form-group">
                    <label for="jenis kelamin">Jenis Kelamin</label>
                    <select name="jenis_kelamin" id="jenis_kelamin" class="form-control" value="<?php echo $jenis_kelamin ?>">
                        <option value="Laki-laki">Laki-laki</option>
                        <option value="Perempuan">Perempuan</option>
                    </select>
                  </div>
                  <div class="form-group">
                    <label for="nama surat">Alamat</label>
                    <input type="text" name="alamat" class="form-control" id="alamat" placeholder="masukan alamat" value="<?php echo $alamat ?>">
                  </div>
                  <div class="form-group">
                    <label for="nama surat">Nomor Telepon</label>
                    <input type="number" name="no_telepon" class="form-control" id="no_telepon" placeholder="masukan nomor telepon" value="<?php echo $no_telepon ?>">
                  </div>
                  <div class="form-group">
                    <label for="nama surat">Email</label>
                    <input type="email" name="email" class="form-control" id="email" placeholder="masukan email" value="<?php echo $email ?>">
                  </div>
                  <div class="form-group">
                    <label for="jabatan">Jabatan</label>
                    <select name="jabatan" id="jabatan" class="form-control" value="<?php echo $jabatan ?>">
                        <option value="Kepala">Kepala Desa</option>
                        <option value="Sekretaris">Sekretaris Desa</option>
                        <option value="Kaur Tata Usaha dan Umum">Kaur Tata Usaha dan Umum</option>
                        <option value="Kaur Keuangan">Kaur Keuangan</option>
                        <option value="Kaur Perencanaan">Kaur Perencanaan</option>
                        <option value="Kasi Pemerintahan">Kasi Pemerintahan</option>
                        <option value="Kasi Kesejahteraan">Kasi Kesejahteraan</option>
                        <option value="Kasi Pelayanan">Kasi Pelayanan</option>
                        <option value="BPD">BPD</option>
                        <option value="Staff">Staff</option>
                    </select>
                  </div>
                  <div class="form-group">
                    <label for="status">Status</label>
                    <select name="status" id="status" class="form-control" value="<?php echo $status ?>">
                        <option value="Menikah">Menikah</option>
                        <option value="belum Menikah">Belum Menikah</option>
                    </select>
                  </div>
                  <div class="form-group">
                    <label for="masa jabatan">Masa jabatan</label>
                    <input type="date" name="masa_jabatan" class="form-control" id="masa_jabatan" value="<?php echo $masa_jabatan ?>">
                  </div>
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" name="submit" class="btn btn-info">Kirim</button>
                </div>
              </form>
            </div>
            <!-- /.card -->
    </section>
  <!-- form pemasaran -->
  </div>
  <!-- /.content-wrapper -->

  <div class="content-wrapper">
    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Data Struktural</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example2" class="table table-bordered table-hover">
                  <thead>
                  <tr>
                    <th scope="col" class="table-success text-center">NO</th>
                    <th scope="col" class="table-success text-center">Nama</th>
                    <th scope="col" class="table-success text-center">Jenis Kelamin</th>
                    <th scope="col" class="table-success text-center">Alamat</th>
                    <th scope="col" class="table-success text-center">Nomor Telepon</th>
                    <th scope="col" class="table-success text-center">Email</th>
                    <th scope="col" class="table-success text-center">Jabatan</th>
                    <th scope="col" class="table-success text-center">Status</th>
                    <th scope="col" class="table-success text-center">Masa Jabatan</th>
                    <th scope="col" class="table-success text-center">Aksi</th>
                  </tr>
                  <body>
                    <?php
                    if(isset($_POST['search'])){
                      $cari = $_POST['cari'];
                      $sql6 = "SELECT * FROM tb_struktur where jabatan like '%$cari%' order by id desc";
                    }else{
                      $sql6 = "SELECT * FROM tb_struktur order by id desc"; 
                    }
                    $q6   = mysqli_query($conn, $sql6);
                    $urut = 1;
                    while($r6 = mysqli_fetch_array($q6)){
                        $id             = $r6['id'];
                        $nama           = $r6['nama'];
                        $jenis_kelamin  = $r6['j_kelamin'];
                        $alamat         = $r6['alamat'];
                        $no_telepon     = $r6['no_telepon'];
                        $email          = $r6['email'];
                        $jabatan        = $r6['jabatan'];
                        $status         = $r6['status'];
                        $masa_jabatan   = $r6['masa_jabatan'];
                      
                        ?>

                        <tr>
                            <td scope="row" class="text-center"><?php echo $urut++ ?></td>
                            <td scope="row" class="text-center"><?php echo $nama ?></td>
                            <td scope="row" class="text-center"><?php echo $jenis_kelamin ?></td>
                            <td scope="row" class="text-center"><?php echo $alamat ?></td>
                            <td scope="row" class="text-center"><?php echo $no_telepon ?></td>
                            <td scope="row" class="text-center"><?php echo $email ?></td>
                            <td scope="row" class="text-center"><?php echo $jabatan ?></td>
                            <td scope="row" class="text-center"><?php echo $status ?></td>
                            <td scope="row" class="text-center"><?php echo $masa_jabatan ?></td>
                            <td scope="row" class="text-center">
                                <a href="struktural.php?op=edit&id=<?php echo $id?>"><button type="button" class="btn btn-warning">Edit</button></a>
                                <a href="struktural.php?op=delete&id=<?php echo $id?>" onclick="return confirm('Yakin mau menghapus data?')"><button type="button" class="btn btn-danger">Delete</button></a>
                
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