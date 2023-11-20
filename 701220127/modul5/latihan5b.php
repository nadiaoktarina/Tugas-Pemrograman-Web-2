
 <?php

$pahlawan_nasional = array(
    array(
        'Gambar Pahlawan' => 'soekarno.jpg',
        'Nama Pahlawan' => 'Soekarno',
        'Tempat Lahir' => 'Blitar',
        'Tanggal Lahir' => '6 Juni 1901',
        'Tanggal Wafat' => '21 Juni 1970'
    ),
    array(
        'Gambar Pahlawan' => 'kh.agussalim.jpg',
        'Nama Pahlawan' => 'KH.Agus Salim',
        'Tempat Lahir' => 'Padang Panjang',
        'Tanggal Lahir' => '8 Oktober 1884',
        'Tanggal Wafat' => '4 November 1954'
    ),
    array(
        'Gambar Pahlawan' => 'fatmawati.jpg',
        'Nama Pahlawan' => 'Fatmawati',
        'Tempat Lahir' => 'Bengkulu',
        'Tanggal Lahir' => '5 Februari 1923',
        'Tanggal Wafat' => '14 Mei 1980'
    ),
    array(
        'Gambar Pahlawan' => 'diponegoro.jpg',
        'Nama Pahlawan' => 'Pangeran Diponegoro',
        'Tempat Lahir' => 'Yogyakarta',
        'Tanggal Lahir' => '11 November 1785',
        'Tanggal Wafat' => '8 Januari 1855'
    ),
    array(
        'Gambar Pahlawan' => 'kartini.jpg',
        'Nama Pahlawan' => 'Raden Ajeng Kartini',
        'Tempat Lahir' => 'Rembang',
        'Tanggal Lahir' => '21 April 1879',
        'Tanggal Wafat' => '17 September 1904'
    ),
    array(
        'Gambar Pahlawan' => 'bungtomo.jpg',
        'Nama Pahlawan' => 'Bung Tomo',
        'Tempat Lahir' => 'Surabaya',
        'Tanggal Lahir' => '3 Oktober 1920',
        'Tanggal Wafat' => '7 Oktober 1981'
    ),
    array(
        'Gambar Pahlawan' => 'mohhatta.jpg',
        'Nama Pahlawan' => 'Mohammad hatta',
        'Tempat Lahir' => 'Bukit tinggi',
        'Tanggal Lahir' => '12 Agustus 1902',
        'Tanggal Wafat' => '14 Maret 1980'
    ),
    array(
        'Gambar Pahlawan' => 'jendralsudirman.jpg',
        'Nama Pahlawan' => 'Jendral Sudirman',
        'Tempat Lahir' => 'Purbalingga',
        'Tanggal Lahir' => '24 Januari 1916',
        'Tanggal Wafat' => '29 Januari 1950'
    ),
    array(
        'Gambar Pahlawan' => 'drsoetomo.jpg',
        'Nama Pahlawan' => 'Dr Soetomo',
        'Tempat Lahir' => 'Blitar',
        'Tanggal Lahir' => '3 Oktober 1888',
        'Tanggal Wafat' => '15 Oktober 1938'
    ),
    array(
        'Gambar Pahlawan' => 'kihajardewantara.jpg',
        'Nama Pahlawan' => 'Ki Hajar Dewantara',
        'Tempat Lahir' => 'Yogyakarta',
        'Tanggal Lahir' => '2 Mei 1889',
        'Tanggal Wafat' => '26 April 1959'
    ),
);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GET</title>
</head>
<style type="text/css">
.container {
            width: 350px;
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
    <h1 style="text-align: center;">Daftar Pahlawan Nasional</h1>
    <?php foreach( $pahlawan_nasional as $pahlawan) : ?>
            <div class= "container">
                <ul>
                <?php echo '<td><img src="gambar_pahlawan/' . $pahlawan['Gambar Pahlawan'] . '" width="100" height="100"></td>'; ?>
                <div class= "row">
                <a href="latihan5c.php?Nama=<?= $pahlawan["Nama Pahlawan"]; ?>&TL=<?= $pahlawan["Tempat Lahir"]; ?>&TTL=<?= $pahlawan["Tanggal Lahir"]; ?>&TW=<?= $pahlawan["Tanggal Wafat"]; ?>&gambar=<?= $pahlawan["Gambar Pahlawan"]; ?>"><?= $pahlawan["Nama Pahlawan"]; ?></a>
                </ul>
                </div>
            </div>
    <?php endforeach; ?>
</body>
</html>