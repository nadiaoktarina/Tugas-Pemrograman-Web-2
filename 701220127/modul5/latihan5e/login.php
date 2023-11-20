<?php
//cek apakah tombol submit sudah ditekan atau belum
if(isset($_POST["submit"])) {
//cek username & password
if($_POST["username"] == "Nadia Oktarina" && $_POST["password"] == "701220127") {
    //jika benar, redirect ke halaman admin
        header("Location: halamanadmin.php");
        exit;
}else{
    //jika salah, tampilkan pesan kesalahan
    $error = true;
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman login</title>
</head>
<style type="text/css">
.container {
            width: 500px;
            height: 180px;
            margin: 0 auto;
            border: 2px solid black;
        }
        .row {
            text-align: center;
            font-size: 20px;
        }
        
</style>
<body>
    <h1 style="text-align: center;">Login</h1>
    
    <ul>
    <div class= "container">
        <div class= "row"><form style="text-align: center;" action="" method="post">
            <br>
            <label for="username">Username :</label>
            <input type="text" name="username" id="username">
            <br>
            <br>
            <label for="password">Password :</label>
            <input type="password" name="password" id="password">
            <br>
            <br>
            <button style="background-color: blue; color: white;" type="submit" name="submit">Login</button>
        
    </form></div>
    </ul>

    <?php if( isset($error) ): ?>
    <p style="color: red; font-style:italic; text-align: center;">username/password salah!</p>
    <?php endif; ?>

</body>
</html>