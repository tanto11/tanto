<?php
include("config.php");
if($_SERVER['REQUEST_METHOD'] == "POST"){
    //ambil data dari form
    $nis = $_POST['nis'];
    $nama = $_POST['nama_lengkap'];
    $alamat = $_POST['alamat'];
    $jenis_kelamin = $_POST['jenis_kelamin'];
    $no_telp = $_POST['no_telp'];
    $kelas = $_POST['kelas'];
    //buat query update
    $sql = "UPDATE t-siswa SET nama_lenkap='$namanama', alamat='$alamat', 
    jenis_kelamin='$jk', no_telp='$no_telp', kelas='$kelas', WHERE nis = $nis';
    $query = mysqli_query($db, $sql) or die(mysqli_error($db));
    //apakah update berhasil
    if($query){
        //kalau berhasil, alihkan ke halaman index.php dengan status=sukses
        header('location:index.php?status=gagal');
    }  
}else{
    die("Akses dilarang ....");
}
?>