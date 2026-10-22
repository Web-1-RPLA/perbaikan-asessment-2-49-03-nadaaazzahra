//perbaikan
<?php
include "koneksi.php";

$query = mysqli_query($conn, "SELECT 
reservasi.id,
tamu.nama,
kamar.nomor_kamar,
kamar.tipe_kamar,
reservasi.tanggal_checkin,
reservasi.tanggal_checkout,
reservasi.status

FROM reservasi

INNER JOIN tamu 
ON reservasi.id_tamu = tamu.id

INNER JOIN kamar 
ON reservasi.id_kamar = kamar.id
");
?>

<!DOCTYPE html>
<html>
<head>
    <title>Data Reservasi</title>

    <style>
        body{
            font-family:Arial;
            background:#f8f1e9;
        }

        .container{
            width:90%;
            margin:auto;
            margin-top:40px;
        }

        h2{
            color:#8B4513;
        }

        table{
            width:100%;
            border-collapse:collapse;
            background:white;
            margin-top:20px;
        }

        th, td{
            border:1px solid #ccc;
            padding:10px;
            text-align:center;
        }

        th{
            background:#343a40;
            color:white;
        }

        a{
            text-decoration:none;
            background:#8B4513;
            color:white;
            padding:8px 12px;
            border-radius:5px;
        }
    </style>
</head>
<body>

<div class="container">

<h2>Data Reservasi</h2>

<a href="index.php">Home</a>
<a href="tambahReservasi.php">Tambah Reservasi</a>

<table>

<tr>
    <th>ID</th>
    <th>Nama Tamu</th>
    <th>Nomor Kamar</th>
    <th>Tipe Kamar</th>
    <th>Tanggal Checkin</th>
    <th>Tanggal Checkout</th>
    <th>Status</th>
</tr>

<?php while($data = mysqli_fetch_array($query)){ ?>

<tr>

    <td><?= $data['id']; ?></td>

    <td><?= $data['nama']; ?></td>

    <td><?= $data['nomor_kamar']; ?></td>

    <td><?= $data['tipe_kamar']; ?></td>

    <td><?= $data['tanggal_checkin']; ?></td>

    <td><?= $data['tanggal_checkout']; ?></td>

    <td><?= $data['status']; ?></td>

</tr>

<?php } ?>

</table>

</div>

</body>
</html>