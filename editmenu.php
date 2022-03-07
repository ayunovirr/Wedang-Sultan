<?php
    include 'koneksi.php';
    $id = $_POST['id'];
	$nama = $_POST['nama'];
	$caption = $_POST['caption'];
    $harga = $_POST['harga'];
    $photo = $_POST['photo'];
	
    $query= mysqli_query ($konek, "UPDATE menu set nama='$nama', caption ='$caption', harga='$harga', photo ='$photo' where id='$id'") 
	or die (mysqli_error($konek));

    if($query)
    {
        echo "Berhasil Update";
        header("location:menuadmin.php");
    }  
?>