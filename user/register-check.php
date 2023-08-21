<?php 
session_start(); 
include "koneksi.php";

if (isset($_POST['nama']) && isset($_POST['NIK']) && isset($_POST['no_KK']) && isset($_POST['alamat']) && isset($_POST['no_telepon'])
&& isset($_POST['j_kelamin']) && isset($_POST['status']) && isset($_POST['pekerjaan']) && isset($_POST['password'])) {

	function validate($data){
       $data = trim($data);
	   $data = stripslashes($data);
	   $data = htmlspecialchars($data);
	   return $data;
	}

	$name = validate($_POST['nama']);
	$nik = validate($_POST['NIK']);
	$no_kk = validate($_POST['no_KK']);
	$alamat = validate($_POST['alamat']);
	$telepon = validate($_POST['no_telepon']);
	$jk = validate($_POST['j_kelamin']);
	$status = validate($_POST['status']);
	$pekerjaan = validate($_POST['pekerjaan']);
	$pass = validate($_POST['password']);

	$user_data = 'NIK='. $nik. '&nama='. $name;


	if (empty($name)) {
		header("Location: register.php?error=Nama tidak boleh kosong&$user_data");
	    exit();
	}
	else if(empty($nik)){
        header("Location: register.php?error=NIK tidak boleh kosong&$user_data");
	    exit();
	}

	else if(empty($no_kk)){
        header("Location: register.php?error=Nomor KK Tidak boleh kosong&$user_data");
	    exit();
	}

	else if(empty($alamat)){
        header("Location: register.php?error=Alamat Tidak boleh kosong&$user_data");
	    exit();
	}

	else if(empty($telepon)){
        header("Location: register.php?error=Nomor Telepon Tidak boleh kosong&$user_data");
	    exit();
	}

	else if(empty($jk)){
        header("Location: register.php?error=Jenis Kelamin Tidak boleh kosong&$user_data");
	    exit();
	}

	else if(empty($status)){
        header("Location: register.php?error=Status tidak boleh kosong&$user_data");
	    exit();
	}

	else if(empty($pekerjaan)){
        header("Location: register.php?error=Pkerjaan Tidak boleh ksosng&$user_data");
	    exit();
	}
	else if(empty($pass)){
        header("Location: register.php?error=Password tidak boleh kosong&$user_data");
	    exit();
	}

	else{

		// hashing the password
        $pass = md5($pass);

	    $sql = "SELECT * FROM tb_masyarakat WHERE nama='$name' ";
		$result = mysqli_query($conn, $sql);

		if (mysqli_num_rows($result) > 0) {
			header("Location: register.php?error=Nama Pengguna Sudah Ada&$user_data");
	        exit();
		}else {
           $sql2 = "INSERT INTO tb_masyarakat(nama, NIK, no_KK, alamat, no_telepon, j_kelamin, status, pekerjaan,  password) VALUES('$name', '$nik', '$no_kk', '$alamat', '$telepon', '$jk',
		   '$status', '$pekerjaan', '$pass')";
        	$result2 = mysqli_query($conn, $sql2);

           if ($result2) {
           	 header("Location: register.php?success=Kamu Berhasil Membuat Akun");
	         exit();
           }else {
	           	header("Location: register.php?error=terjadi kesalahan&$user_data");
		        exit();
           }
		}
	}
	
}else{
	header("Location: register.php");
	exit();
}