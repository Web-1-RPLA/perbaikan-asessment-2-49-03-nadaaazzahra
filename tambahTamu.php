//perbaikan
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
    <h2>Tambah Tamu Baru</h2>

    <form action="prosesTamu.php" method="POST">

        <label>Nama Lengkap</label>
        <input type="text" name="nama" required>

        <label>No KTP</label>
        <input type="text" name="no_ktp" required>

        <label>No HP</label>
        <input type="text" name="no_hp" required>

        <label>Alamat</label>
        <textarea name="alamat" required></textarea>

        <button type="submit" name="simpan">Simpan Tamu</button>
        <a href="tamu.php">Batal</a>

    </form>
</div>

</body>
</html>