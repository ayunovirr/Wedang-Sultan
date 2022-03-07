<?php
    include "koneksi.php";
    $id = $_GET['id'];
    $query = mysqli_query ($konek,"delete from menu where id='$id'") or die (mysqli_error($konek));
    if($query)
    {
        echo "proses berhasil";
        header("location:menuadmin.php");
    }
    else
    {
        echo "Gagal";
    }
?>