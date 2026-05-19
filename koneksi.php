//perbaikan
<?php

$servername = "localhost";
$username = "root";
$password = "";
$database = "hotel2";

$conn = mysqli_connect(
    $servername,
    $username,
    $password,
    $database
);

if (!$conn) {
    die("Koneksi gagal: " . mysqli_connect_error());
}

?>