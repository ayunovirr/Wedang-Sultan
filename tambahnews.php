<?php 
    include "koneksi.php";
	$caption = $_POST['caption'];
    $photo = $_POST['photo'];
    
    $query = mysqli_query($konek, "INSERT INTO news values('','$caption','$photo')");

    if ($query) {
        print "SUKSES";
        header("location:blogadmin.php");
    }
    else{
        print "Gagal";
    }

 ?>