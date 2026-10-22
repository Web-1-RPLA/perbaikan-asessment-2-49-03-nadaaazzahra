//perbaikan
<?php
include "koneksi.php";

if(isset($_POST['simpan'])){

    $nama = $_POST['nama'];
    $no_ktp = $_POST['no_ktp'];
    $no_hp = $_POST['no_hp'];
    $alamat = $_POST['alamat'];

    $query = mysqli_query($conn, "INSERT INTO tamu 
    VALUES (
        '',
        '$nama',
        '$no_ktp',
        '$no_hp',
        '$alamat'
    )");

    if($query){
        header("Location: tamu.php");
    } else {
        echo "Data gagal ditambahkan";
    }
}
?>