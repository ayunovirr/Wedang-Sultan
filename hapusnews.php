<?php
    include "koneksi.php";
    $id = $_GET['id'];
    $query = mysqli_query ($konek,"delete from news where id='$id'") or die (mysqli_error($konek));
    if($query)
    {
        echo "proses berhasil";
        header("location:blogadmin.php");
    }
    else
    {
        echo "Gagal";
    }
?>