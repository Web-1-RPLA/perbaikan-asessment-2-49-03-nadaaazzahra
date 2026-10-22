//perbaikan
<?php
include "koneksi.php";

$query = mysqli_query($conn, "SELECT * FROM kamar");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Kamar</title>

    <style>
        body{
            font-family: Arial, sans-serif;
            background:#f8f1e9;
            margin:0;
            padding:0;
        }

        .container{
            width:80%;
            margin:auto;
            margin-top:40px;
        }

        h2{
            color:#8B4513;
        }

        table{
            width:100%;
            border-collapse:collapse;
            margin-top:20px;
            background:white;
        }

        table, th, td{
            border:1px solid #ccc;
        }

        th, td{
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
            margin-right:5px;
        }

        .pesan{
            margin-top:20px;
            background:white;
            padding:15px;
        }
    </style>
</head>
<body>

<div class="container">

    <h2>Data Kamar</h2>

    <a href="index.php">Home</a>
    <a href="tambahKamar.php">Tambah Kamar</a>

    <?php
    if(mysqli_num_rows($query) > 0){
    ?>

    <table>

        <tr>
            <th>ID</th>
            <th>Nomor Kamar</th>
            <th>Tipe Kamar</th>
            <th>Harga Per Malam</th>
            <th>Status</th>
        </tr>

        <?php while($data = mysqli_fetch_array($query)){ ?>

        <tr>

            <td><?= $data['id']; ?></td>
            <td><?= $data['nomor_kamar']; ?></td>
            <td><?= $data['tipe_kamar']; ?></td>
            <td><?= $data['harga_per_malam']; ?></td>
            <td><?= $data['status']; ?></td>

        </tr>

        <?php } ?>

    </table>

    <?php
    }else{
        echo "<div class='pesan'>Belum ada data kamar.</div>";
    }
    ?>

</div>

</body>
</html>