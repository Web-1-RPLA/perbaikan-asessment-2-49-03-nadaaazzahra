//perbaikan
<?php
include "koneksi.php";

$id = $_GET['id'];

mysqli_query($conn, "DELETE FROM reservasi WHERE id_tamu='$id'");

$query = mysqli_query($conn, "DELETE FROM tamu WHERE id='$id'");

if($query){
    header("Location: tamu.php");
}else{
    echo "Data gagal dihapus";
}
?>