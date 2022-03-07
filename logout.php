<?php
	session_start();
	session_destroy(); //akhiri session

	header("location:login.php?pesan=logout");
?>