<?php

$conn = mysqli_connect("localhost","root","","si_login");

if (!$conn) {
	echo "Connection failed!";
}