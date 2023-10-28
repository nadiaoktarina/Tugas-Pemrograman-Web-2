<?php
function styleText($text,$kelas) {
    $styledText = '<span class="' . $kelas . '"style="font-size: 28px;
    font-family: Arial; color: #000000; font-style: italic; border: 1px solid;">' . $text . '</span>';
    return $styledText;
}

$tulisan = "Hello world! Here I Come!";
$kelas = "ganti-style";
$styledResult = styleText($tulisan, $kelas);


echo $styledResult;
?>