<?php 
    include "koneksi.php";
    $nama = $_POST['nama'];
	$caption = $_POST['caption'];
    $harga = $_POST['harga'];
    $photo = $_POST['photo'];
    
    $query = mysqli_query($konek, "INSERT INTO menu values('','$nama','$caption','$harga','$photo')");

    if ($query) {
        print "SUKSES";
        header("location:menuadmin.php");
    }
    else{
        print "Gagal";
    }
 ?>