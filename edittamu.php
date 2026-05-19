//perbaikan
<?php
include "koneksi.php";

$id = $_GET['id'];

$query = mysqli_query($conn, "SELECT * FROM tamu WHERE id='$id'");
$data = mysqli_fetch_array($query);
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
        }

        .container{
            width:400px;
            margin:auto;
            margin-top:50px;
            background:white;
            padding:20px;
            border-radius:10px;
        }

        input, textarea{
            width:100%;
            padding:8px;
            margin-top:5px;
            margin-bottom:15px;
        }

        button{
            padding:10px 15px;
            background:#8B4513;
            color:white;
            border:none;
            cursor:pointer;
        }

        a{
            text-decoration:none;
            margin-left:10px;
        }
    </style>
</head>
<body>

<div class="container">
    <h2>Edit Data Tamu</h2>

    <form action="proseseditTamu.php" method="POST">

        <input type="hidden" name="id" value="<?= $data['id']; ?>">

        <label>Nama Lengkap</label>
        <input type="text" name="nama" value="<?= $data['nama']; ?>" required>

        <label>No KTP</label>
        <input type="text" name="no_ktp" value="<?= $data['no_ktp']; ?>" required>

        <label>No HP</label>
        <input type="text" name="no_hp" value="<?= $data['no_hp']; ?>" required>

        <label>Alamat</label>
        <textarea name="alamat" required><?= $data['alamat']; ?></textarea>

        <button type="submit" name="update">Update Tamu</button>
        <a href="tamu.php">Batal</a>

    </form>
</div>

</body>
</html>