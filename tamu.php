//perbaikan
<?php
include "koneksi.php";

$query = mysqli_query($conn, "SELECT * FROM tamu");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>D3IF-49-03, Nadaa Az Zahra 607062530005</title>

    <style>
        body{
            font-family: Arial, sans-serif;
            background-color:#f8f1e9;
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

        a{
            text-decoration:none;
            padding:8px 12px;
            background:#8B4513;
            color:white;
            border-radius:5px;
            margin-right:5px;
        }

        a:hover{
            background:#5c2e0f;
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

        .pesan{
            margin-top:20px;
            background:white;
            padding:15px;
            border:1px solid #ccc;
        }
    </style>
</head>
<body>

<div class="container">

    <h2>Data Tamu</h2>

    <a href="index.php">Home</a>
    <a href="tambahTamu.php">Tambah Tamu</a>

    <?php
    if(mysqli_num_rows($query) > 0){
    ?>

    <table>
        <tr>
            <th>ID</th>
            <th>Nama</th>
            <th>No KTP</th>
            <th>No HP</th>
            <th>Alamat</th>
            <th>Aksi</th>
        </tr>

        <?php while($data = mysqli_fetch_array($query)){ ?>

        <tr>
            <td><?= $data['id']; ?></td>
            <td><?= $data['nama']; ?></td>
            <td><?= $data['no_ktp']; ?></td>
            <td><?= $data['no_hp']; ?></td>
            <td><?= $data['alamat']; ?></td>

            <td>
                <a href="editTamu.php?id=<?= $data['id']; ?>">Edit</a>

                <a href="proseshapus.php?id=<?= $data['id']; ?>"
                onclick="return confirm('Yakin ingin menghapus data?')">
                Hapus
                </a>
            </td>
        </tr>

        <?php } ?>

    </table>

    <?php
    } else {
        echo "<div class='pesan'>Belum ada data tamu.</div>";
    }
    ?>

</div>

</body>
</html>