<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tugas 4</title>
</head>
<body>
    <?php

    echo "Perulangan untuk mencari kategori bilangan : </br>";
    for ($y = 1; $y <= 20; $y++) {
        echo "Angka $y adalah ";

        if ($y % 2 == 0) {
            echo "bilangan genap";
        }else {
            echo "bilangan ganjil";
        }

        if (prima($y)) {
            echo " sekaligus bilangan prima.";
        }
        echo "<br>";
        
    }

    function prima($x) {
        if ($x <= 1) {
            return false;
        }

        for ($y = 2; $y < $x; $y++) {
            if ($x % $y == 0) {
                return false;
            }
        }

        return true;
    }
?> 
</body>
</html>