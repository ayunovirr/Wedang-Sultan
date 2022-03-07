<?php
    include "koneksi.php";
    $name = $_GET['name'];
    $query = mysqli_query ($konek,"delete from pesan where name='$name'") or die (mysqli_error($konek));
    if($query)
    {
        echo "proses berhasil";
        header("location:ViewMessage.php");
    }
    else
    {
        echo "Gagal";
    }
?>