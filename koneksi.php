<?php
    $hostname = "localhost";
    $username = "id11955726_sultan";
    $password = "themark7";
    $database = "id11955726_wedangsultan";

    $konek = new mysqli ($hostname,$username,$password,$database);
    if($konek->connect_error)
    {
        die ('Maaf koneksi gagal : '. $connect->connect_error);
    }
 ?>