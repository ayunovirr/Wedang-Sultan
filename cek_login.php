<?php
	include "koneksi.php";
	session_start(); //memulai session harus dengan ini
	$username = $_POST['username'];
	$password = $_POST['password'];

	$data = mysqli_query($konek,"SELECT *from user where username = '$username' and password = '$password'") or die(mysqli_error($query));

	//menghitung jumlah data yang ditemukan
	$cek = mysqli_num_rows($data);
	if ($cek > 0) //cek di Database
	{
		$_SESSION['username'] = $username;
		$_SESSION['status'] = "login";
		header("location:admin.php");
	}
	else
	{
		header("location:login.php?pesan=gagal");
	}
?>