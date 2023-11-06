<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data negara, ibukota dan kode negara</title>
</head>
<body>
    <?php
    //buat array multidimensi dengan informasi negara, ibukota, dan kode negara
    $dataNegara = array(
        array("Negara" => "Indonesia", "Ibu kota" => "D.K.I.Jakarta", "Kode Negara" => "+62"),
        array("Negara" => "Singapura", "Ibu kota" => "Singapura", "Kode Negara" => "+65"),
        array("Negara" => "Malaysia", "Ibu kota" => "Kuala Lumpur", "Kode Negara" => "+60"),
        array("Negara" => "Brunei", "Ibu kota" => "Bandar Seri Begawan", "Kode Negara" => "+673"),
        array("Negara" => "Thailand", "Ibu kota" => "Bangkok", "Kode Negara" => "+66"),
        array("Negara" => "Laos", "Ibu kota" => "Vientiane", "Kode Negara" => "+856"),
        array("Negara" => "Filipina", "Ibu kota" => "Manila", "Kode Negara" => "+63"),
        array("Negara" => "Myanmar", "Ibu kota" => "Naypyidaw", "Kode Negara" => "+95"),
    );
    //tampilkan isi array dalam bentuk tabel
    echo "<table border='1'>";
    echo "<tr><th>Negara</th><th>Ibu Kota</th><th>Kode Negara</th></tr>";
    foreach ($dataNegara as $negara) {
        echo "<tr><td>" . $negara['Negara'] . "</td><td>" . $negara['Ibu kota'] . "</td><td>" . $negara['Kode Negara'] . "</td></tr>";
    }
    echo "</table>";
    ?>
</body>
</html>