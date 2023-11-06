<?php

$NegaraAsean = [
    "Indonesia" => "D.K.I.Jakarta",
    "Singapura" => "Singapura",
    "Malaysia" => "Kuala Lumpur",
    "Brunai" => "Bandar Seri Begawan",
    "Thailand" => "Bangkok",
    "Laos" => "Vientiane",
    "Filipina" => "Manila",
    "Myanmar" => "Naypyidaw"];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Negara ASEAN dan Ibukota</title>
</head>
<body>
    <?php 
    echo "<b>Daftar Negara ASEAN dan Ibukota: </b>"; 
    foreach ($NegaraAsean as $negara => $ibukota) : ?>
        <li><?php echo "$negara : $ibukota" ?></li>
    <?php endforeach ?>
</body>
</html>