<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modul 2 - Latihan</title>
</head>
<body>
    <table border="1" cellpadding="3" cellspacing="0">
        <tr>
            <th>Kolom 1</th>
            <th>Kolom 2</th>
            <th>Kolom 3</th>
            <th>Kolom 4</th>
            <th>Kolom 5</th>
        </tr>

        <!--TULIS SCRIPT PHP DIBAWAH BARIS INI-->
        <?php
            $baris = 15;
            $kolom = 5;

            echo"<tr>";
            echo"</tr>";

            for ($i=1; $i <= $baris; $i++) {
                echo"<tr>";

                for ($j=1; $j <= $kolom; $j++) {
                echo "<th>Baris $i, Kolom$j</th>";
                }echo "</tr>";
            }echo"</table>"

            ?>
            
    </table>
</body>
</html>