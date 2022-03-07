<?php
    include 'koneksi.php';
    $id = $_POST['id'];
    $caption = $_POST['caption'];
    $photo = $_POST['photo'];
    $query= mysqli_query ($konek, "UPDATE news set caption ='$caption', photo ='$photo' where id='$id'") or die (mysqli_error($konek));

    if($query)
    {
        echo "Berhasil Update";
        header("location:blogadmin.php");
    }
    
?>