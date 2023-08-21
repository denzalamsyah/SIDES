<?php 
session_start(); 
include "koneksi.php";

if (isset($_POST['nik']) && isset($_POST['pw'])) {

	function validate($data){
       $data = trim($data);
	   $data = stripslashes($data);
	   $data = htmlspecialchars($data);
	   return $data;
	}

	$nik = validate($_POST['nik']);
	$pass = validate($_POST['pw']);

	if (empty($nik)) {
		header("Location: login.php?error=Username Tidak Boleh Kosong");
	    exit();
	}else if(empty($pass)){
        header("Location: login.php?error=ePassword Tidak Boleh Kosong");
	    exit();
	}else{
		// hashing the password
        $pass = md5($pass);

        
		$sql = "SELECT * FROM tb_masyarakat WHERE NIK='$nik' AND password='$pass'";

		$result = mysqli_query($conn, $sql);

		if (mysqli_num_rows($result) === 1) {
			$row = mysqli_fetch_assoc($result);
            if ($row['NIK'] === $nik && $row['password'] === $pass) {
            	$_SESSION['NIK'] = $row['NIK'];
            	$_SESSION['nama'] = $row['nama'];
            	$_SESSION['id'] = $row['id'];
            	header("Location: indexuser.php");
		        exit();
            }else{
				header("Location: login.php?error=Username atau Kata Sandi Salah");
		        exit();
			}
		}else{
			header("Location: login.php?error=Username atau Kata Sandi Salah");
	        exit();
		}
	}
	
}else{
	header("Location: login.php");
	exit();
}