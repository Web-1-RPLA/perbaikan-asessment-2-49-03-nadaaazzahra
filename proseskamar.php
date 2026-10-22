//perbaikan
<?php
include "koneksi.php";

if(isset($_POST['simpan'])){

    $nomor_kamar = $_POST['nomor_kamar'];
    $tipe = $_POST['tipe'];
    $harga = $_POST['harga'];
    $status = $_POST['status'];

    $query = mysqli_query($conn, "INSERT INTO kamar
    VALUES(
        '',
        '$nomor_kamar',
        '$tipe',
        '$harga',
        '$status'
    )");

    if($query){
        header("Location: kamar.php");
    }else{
        echo "Data gagal ditambahkan";
    }
}
?>