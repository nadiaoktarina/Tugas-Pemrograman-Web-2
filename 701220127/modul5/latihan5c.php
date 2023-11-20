<?php
//Cek apakah tidak ada data di $_GET
if( !isset($_GET["Nama"]) || 
    !isset($_GET["TL"]) || 
    !isset($_GET["TTL"]) || 
    !isset($_GET["TW"]) || 
    !isset($_GET["gambar"])) {
    //redirect
    header("Location: latihan5b.php");
    exit;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail Pahlawan Nasional</title>
</head>
<style type="text/css">
.container {
            width: 300px;
            margin: 0 auto;
            border: 1px solid #ccc;
            border-radius: 10px;
            background-color: #fff;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        .row {
            text-align: center;
            font-size: 20px;
        }
        
    </style>
<body>
    <div class= "container">

    <div class= "row">
    <h1 style="text-align: center;">Profil Pahlawan</h1>
    <img src="gambar_pahlawan/<?= $_GET["gambar"]; ?>" width="100" height="100">
    <br><?= $_GET["Nama"]; ?>
    <br><?= $_GET["TL"]; ?>
    <br><?= $_GET["TTL"]; ?>
    <br><?= $_GET["TW"]; ?>
    </div>
    <br>
<a href="latihan5b.php">Kembali ke daftar pahlawan nasional</a>
    </div>
</body>
</html>