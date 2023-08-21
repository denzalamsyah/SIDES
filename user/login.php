<!DOCTYPE html>
<html>
<head>
	<title>SIDESA||LOGIN</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
     <form action="ceklogin.php" method="POST">
     	<h2 class="nama">LOGIN</h2>
     	<?php if (isset($_GET['error'])) { ?>
     		<p class="error"><?php echo $_GET['error']; ?></p>
     	<?php } ?>

     	<label>NIK</label>
     	<input type="number" name="nik" placeholder="masukan NIK anda"><br>

     	<label>Password</label>
     	<input type="password" name="pw" placeholder="masukan password anda"><br>

     	<button type="submit">Login</button>
          <a href="register.php" class="ca">Belum memiliki akun? Registrasi di sini.</a>
     </form>
</body>
</html>