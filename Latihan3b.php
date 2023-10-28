<?php
//fungsi style text
function soal($jawabanIsset,$jawabanEmpty) {
    $style = "font-size: 28px; font-family: Arial; border: 1px solid; padding: 10px;";
    $styledText = "<p style='$style'>$jawabanIsset $jawabanEmpty</p>";
    return $styledText;
}

//pemanggilan fungsi text
$jawabanIsset = "Isset adalah = variabel yang telah didefinisikan dan memiliki nilai.<br><br>";
$jawabanEmpty = "Empty adalah = variabel yang telah didefinisikan, tetapi nilainya null.";
$styledResult = soal($jawabanIsset, $jawabanEmpty);

//output text
echo $styledResult; 
?>