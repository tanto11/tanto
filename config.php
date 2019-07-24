<?php
    $SERVER = "localhost";
    $USER = "root";
    $PASSSWORD = "";
    $nama_database = "db_siswa";
    $db = mysqli_connect ($SERVER, $USER, $PASSSWORD, $nama_database);
    if(!$db){
        die("Gagal terhubung dengan database: ".mysqli_connect_error());
    }
?>