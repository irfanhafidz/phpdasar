<?php
require "functions.php";
if( isset($_POST["submit"])) {
    if( input($_POST) > 0 ) {
        echo 
        "<script>
        alert('data berhasil ditambahkan!');
        document.location.href = 'index.php';        
        </script>";
    } else {
        echo 
        "<script>
        alert('data gagal ditambahkan!');
        document.location.href = 'inputdata.php';        
        </script>";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/stylex.css">
    <title>Tambah Data Penduduk</title>
</head>
<body class="inputbody">
<div class="body">
    <form action="" method="post">
        <ul class="list">
            <h2>Tambah Data Penduduk</h2>
            <li>
                <label for="fname">Nama Depan : </label>
                <input type="text" name="fname" id="fname" maxlength="20" required>
            </li>
            <li>
                <label for="lname">Nama Belakang : </label>
                <input type="text" name="lname" id="lname" maxlength="20" placeholder="Optional">
            </li>
            <li>
                <label for="nik">NIK : </label>
                <input type="text" name="nik" id="nik" maxlength="10" required>
            </li>
            <li>
                <label for="kelas">Kelas : </label>
                <input type="text" name="kelas" id="kelas" maxlength="50" required>
            </li>
            <li>
                <label for="email">Email : </label>
                <input type="text" name="email" id="email" maxlength="50" required>
            </li>
            <li class="upload">
                <label for="foto">Upload Foto : </label>
                <input type="text" name="foto" id="foto" required>
            </li>
            <li class="submit">
                <button type="submit" name="submit">Tambah Data</button>
            </li>
        </ul>
    </form>
</div>
<div class="clear"></div>
</body>
</html>