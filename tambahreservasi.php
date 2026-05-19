//perbaikan
<?php
include "koneksi.php";

$tamu = mysqli_query($conn, "SELECT * FROM tamu");

$kamar = mysqli_query($conn, "SELECT * FROM kamar");
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
            background:#f8f1e9;
        }

        .container{
            width:400px;
            margin:auto;
            margin-top:50px;
            background:white;
            padding:20px;
            border-radius:10px;
        }

        select, input{
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

    <h2>Tambah Reservasi Baru</h2>

    <form action="prosesReservasi.php" method="POST">

        <label>Tamu</label>
        <select name="id_tamu">

            <option>Pilih Tamu</option>

            <?php while($dataTamu = mysqli_fetch_array($tamu)){ ?>

            <option value="<?= $dataTamu['id']; ?>">
                <?= $dataTamu['nama']; ?>
            </option>

            <?php } ?>

        </select>

        <label>Kamar</label>
        <select name="id_kamar">

            <option>Pilih Kamar</option>

            <?php while($dataKamar = mysqli_fetch_array($kamar)){ ?>

            <option value="<?= $dataKamar['id']; ?>">
                <?= $dataKamar['nomor_kamar']; ?>
            </option>

            <?php } ?>

        </select>

        <label>Tanggal Check-in</label>
        <input type="date" name="checkin">

        <label>Tanggal Check-out</label>
        <input type="date" name="checkout">

        <button type="submit" name="simpan">
            Simpan Reservasi
        </button>

        <a href="reservasi.php">Batal</a>

    </form>

</div>

</body>
</html>