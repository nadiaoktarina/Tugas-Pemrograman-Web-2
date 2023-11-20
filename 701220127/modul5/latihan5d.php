<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>POST</title>
</head>
<body>
    <form action="" method="post">
        Masukkan angka:
        <input type="text" name="angka">

        <button type="submit" name="submit">Tampilkan</button>
    </form>
    <br>
    <?php if(isset($_POST["submit"])) : ?>
    <?php
    //mengecek apakah suatu variabel sudah terdefinisi dan varibel tersebut isinya bukan NULL
    $angka = isset($_POST['angka']) ? intval($_POST['angka']) : 0;

    //membuat rangkaian angka terurut
    for($i = $angka; $i > 0; $i--) {
        for($j = 1; $j <= $i; $j++) {
            echo $j;
        }
        echo "<br>";
    }
    ?>
    <?php endif; ?>
</body>
</html>