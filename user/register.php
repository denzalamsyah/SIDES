<!DOCTYPE html>
<html>
<head>
	<title>SIDESA||Registrasi</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
     <form action="register-check.php" method="post">
     	<h4 class="nama">Registrasi Masyarakat Desa Cipancar</h4>
     	<?php if (isset($_GET['error'])) { ?>
     		<p class="error"><?php echo $_GET['error']; ?></p>
     	<?php } ?>

          <?php if (isset($_GET['success'])) { ?>
               <p class="success"><?php echo $_GET['success']; ?></p>
          <?php } ?>

          <label>Nama</label>
          <?php if (isset($_GET['nama'])) { ?>
               <input type="text" 
                      name="nama" 
                      placeholder="masukan nama anda"
                      value="<?php echo $_GET['nama']; ?>"><br>
          <?php }else{ ?>
               <input type="text" 
                      name="nama" 
                      placeholder="masukan nama anda"><br>
          <?php }?>

          <label>NIK</label>
          <?php if (isset($_GET['NIK'])) { ?>
               <input type="number" 
                      name="NIK" 
                      placeholder="masukan NIK anda"
                      value="<?php echo $_GET['NIK']; ?>"><br>
          <?php }else{ ?>
               <input type="number" 
                      name="NIK" 
                      placeholder="masukan NIK anda"><br>
          <?php }?>

          <label>Nomor KK</label>
          <?php if (isset($_GET['no_KK'])) { ?>
               <input type="number" 
                      name="no_KK" 
                      placeholder="masukan nomor KK anda"
                      value="<?php echo $_GET['no_KK']; ?>"><br>
          <?php }else{ ?>
               <input type="number" 
                      name="no_KK" 
                      placeholder="masukan nomor KK anda"><br>
          <?php }?>

          <label>Alamat</label>
          <?php if (isset($_GET['alamat'])) { ?>
               <input type="text" 
                      name="alamat" 
                      placeholder="masukan nama Kp. RT & RW saja"
                      value="<?php echo $_GET['alamat']; ?>"><br>
          <?php }else{ ?>
               <input type="text" 
                      name="alamat" 
                      placeholder="masukan nama Kp. RT & RW saja"><br>
          <?php }?>

          <label>Nomor Telepon</label>
          <?php if (isset($_GET['no_telepon'])) { ?>
               <input type="number" 
                      name="no_telepon" 
                      placeholder="masukan nomor telepon anda"
                      value="<?php echo $_GET['no_telepon']; ?>"><br>
          <?php }else{ ?>
               <input type="number" 
                      name="no_telepon" 
                      placeholder="masukan nomor telepon anda"><br>
          <?php }?>

          <label>Jenis Kelamin</label>
          <?php if (isset($_GET['j_kelamin'])) { ?>
               <select name="j_kelamin" id="">
                    <option value="">- Pilih Jenis Kelamin -</option>
                    <option value="Laki-laki">Laki-laki</option>
                    <option value="Perempuan">Perempuan</option>
               </select><br>
          <?php }else{ ?>
               <select name="j_kelamin" id="">
                    <option value="">- Pilih Jenis Kelamin -</option>
                    <option value="Laki-laki">Laki-laki</option>
                    <option value="Perempuan">Perempuan</option>
               </select><br>
          <?php }?>

          <label>Status</label>
          <?php if (isset($_GET['status'])) { ?>
               <select name="setatus" id="">
               <option value="">- Pilih Status -</option>
                    <option value="menikah">Menikah</option>
                    <option value="Belum Menikah">Belum Menikah</option>
                    <option value="Pelajar">Pelajar</option>
                    <option value="Mahasiswa">Mahasiswa</option>
               </select><br>
          <?php }else{ ?>
               <select name="status" id="">
               <option value="">- Pilih Status -</option>
                    <option value="Menikah">Menikah</option>
                    <option value="Belum Menikah">Belum Menikah</option>
                    <option value="Pelajar">Pelajar</option>
                    <option value="Mahasiswa">Mahasiswa</option>
               </select><br>
          <?php }?>

          <label>Pekerjaan</label>
               <select name="pekerjaan" id="">
               <option value="">- Pilih Pekerjaan -</option>
                    <option value="Petani">Petani</option>
                    <option value="Peternak">Peternak</option>
                    <option value="Guru">Guru</option>
                    <option value="Pekerja Kantoran">Pekerja kantoran</option>
                    <option value="Belum bekerja">Belum Bekerja</option>
                    <option value="Lainnya">Lainnya</option>
               </select><br>


     	<label>Password</label>
     	<input type="password" 
                 name="password" 
                 placeholder="masukan password untuk akun anda"><br>

     	<button type="submit">registrasi</button>
          <a href="login.php" class="ca">Sudah Memiliki Akun? Login di sini.</a>
     </form>
</body>
</html>