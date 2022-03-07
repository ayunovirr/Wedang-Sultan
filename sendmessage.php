<?php 
    include "koneksi.php";
    $name = $_POST['name'];
    $email = $_POST['email'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];
    
    $query = mysqli_query($konek, "INSERT INTO pesan values('$name','$email','$subject','$message')");

    if ($query) {
        print "SUKSES";
		header("location:contact.php");
    }
    else{
        print "Gagal";
    }
 ?>