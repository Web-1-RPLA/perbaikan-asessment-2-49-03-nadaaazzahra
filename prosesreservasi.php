//perbaikan
<?php
include "koneksi.php";

if(isset($_POST['simpan'])){

    $id_tamu = $_POST['id_tamu'];
    $id_kamar = $_POST['id_kamar'];
    $checkin = $_POST['checkin'];
    $checkout = $_POST['checkout'];

    $status = "Aktif";

    $query = mysqli_query($conn, "INSERT INTO reservasi
    VALUES(
        '',
        '$id_tamu',
        '$id_kamar',
        '$checkin',
        '$checkout',
        '$status'
    )");

    if($query){
        header("Location: reservasi.php");
    }else{
        echo "Data gagal ditambahkan";
    }
}
?>