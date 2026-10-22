//perbaikan
<?php
include "koneksi.php";

if(isset($_POST['update'])){

    $id = $_POST['id'];
    $nama = $_POST['nama'];
    $no_ktp = $_POST['no_ktp'];
    $no_hp = $_POST['no_hp'];
    $alamat = $_POST['alamat'];

    $query = mysqli_query($conn, "UPDATE tamu SET
        nama='$nama',
        no_ktp='$no_ktp',
        no_hp='$no_hp',
        alamat='$alamat'
        WHERE id='$id'
    ");

    if($query){
        header("Location: tamu.php");
    } else {
        echo "Data gagal diupdate";
    }
}
?>