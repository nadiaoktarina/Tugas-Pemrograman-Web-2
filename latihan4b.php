<?php

$negara = ["Indonesia", "Singapura", "Malaysia", "Brunai", "Thailand"];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Negara ASEAN awal</title>
</head>
<body>
<?php
    echo "<b>Daftar Negara ASEAN awal: </b>";
    foreach ($negara as $nr) {
        echo "<li>$nr</li>";
    }
?>
<?php
    echo "</br><b>Daftar Negara ASEAN baru: </b>";
$negara2 = array_push($negara,"Laos","Filipina","Myanmar");
?>
    <?php
    foreach ($negara as $nr) {
        echo "<li>$nr</li>";
    }
?>
</body>
</html>