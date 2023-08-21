<?php 
session_start(); 
include "koneksi.php";

if (isset($_POST['uname']) && isset($_POST['password'])
    && isset($_POST['name']) && isset($_POST['re_password'])) {

	function validate($data){
       $data = trim($data);
	   $data = stripslashes($data);
	   $data = htmlspecialchars($data);
	   return $data;
	}

	$uname = validate($_POST['uname']);
	$pass = validate($_POST['password']);

	$re_pass = validate($_POST['re_password']);
	$name = validate($_POST['name']);

	$user_data = 'uname='. $uname. '&name='. $name;


	if (empty($uname)) {
		header("Location: register.php?error=User Name tidak boleh kosong&$user_data");
	    exit();
	}else if(empty($pass)){
        header("Location: register.php?error=Password tidak boleh kosong&$user_data");
	    exit();
	}
	else if(empty($re_pass)){
        header("Location: register.php?error=Konfirmasi Password tidak boleh kosong&$user_data");
	    exit();
	}

	else if(empty($name)){
        header("Location: register.php?error=Name Tidak boleh ksosng&$user_data");
	    exit();
	}

	else if($pass !== $re_pass){
        header("Location: register.php?error=Konfirmasi Password Tidak sama&$user_data");
	    exit();
	}

	else{

		// hashing the password
        $pass = md5($pass);

	    $sql = "SELECT * FROM tb_loginadmin WHERE user_name='$uname' ";
		$result = mysqli_query($conn, $sql);

		if (mysqli_num_rows($result) > 0) {
			header("Location: register.php?error=Nama Pengguna Sudah Ada&$user_data");
	        exit();
		}else {
           $sql2 = "INSERT INTO tb_loginadmin(name, user_name, password) VALUES('$name',  '$uname', '$pass')";
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