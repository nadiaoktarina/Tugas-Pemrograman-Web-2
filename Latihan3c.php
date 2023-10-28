<?php
function pangkat($angka, $pangkat) {
    $result = 1;
    for($i = 1; $i <= $pangkat; $i++) {
        $result*=$angka;
    }
    return $result;
}

$angka = 5; //konstanta
$pangkat = 4; //pangkat

$result = pangkat($angka, $pangkat);

echo "$angka pangkat $pangkat = 
$result";

?>