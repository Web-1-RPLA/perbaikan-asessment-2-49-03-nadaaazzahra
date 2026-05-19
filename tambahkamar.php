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

        input, select{
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

    <h2>Tambah Kamar Baru</h2>

    <form action="prosesKamar.php" method="POST">

        <label>Nomor Kamar</label>
        <input type="text" name="nomor_kamar" required>

        <label>Tipe Kamar</label>
        <select name="tipe">
            <option>Single</option>
            <option>Double</option>
            <option>Suite</option>
        </select>

        <label>Harga per Malam</label>
        <input type="text" name="harga" required>

        <label>Status</label>
        <select name="status">
            <option>Tersedia</option>
            <option>Penuh</option>
        </select>

        <button type="submit" name="simpan">Simpan Kamar</button>

        <a href="kamar.php">Batal</a>

    </form>

</div>

</body>
</html>