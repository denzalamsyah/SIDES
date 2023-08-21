<?php 
session_start(); 
include "koneksi.php";

if (isset($_POST['uname']) && isset($_POST['password'])) {

	function validate($data){
       $data = trim($data);
	   $data = stripslashes($data);
	   $data = htmlspecialchars($data);
	   return $data;
	}

	$uname = validate($_POST['uname']);
	$pass = validate($_POST['password']);

	if (empty($uname)) {
		header("Location: login.php?error=Username Tidak Boleh Kosong");
	    exit();
	}else if(empty($pass)){
        header("Location: login.php?error=ePassword Tidak Boleh Kosong");
	    exit();
	}else{
		// hashing the password
        $pass = md5($pass);

        
		$sql = "SELECT * FROM tb_loginadmin WHERE user_name='$uname' AND password='$pass'";

		$result = mysqli_query($conn, $sql);

		if (mysqli_num_rows($result) === 1) {
			$row = mysqli_fetch_assoc($result);
            if ($row['user_name'] === $uname && $row['password'] === $pass) {
            	$_SESSION['user_name'] = $row['user_name'];
            	$_SESSION['name'] = $row['name'];
            	$_SESSION['id'] = $row['id'];
            	header("Location: indexadmin.php");
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