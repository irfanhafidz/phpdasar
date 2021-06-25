<?php
require "functions.php";

$id = $_GET["id"];
$pdk = query("SELECT * FROM penduduk WHERE id = $id")[0];

if( isset($_POST["submit"])) {
    if( modify($_POST) > 0 ) {
        echo 
        "<script>
        alert('data berhasil diubah!');
        document.location.href = 'index.php';        
        </script>";
    } else {
        echo 
        "<script>
        alert('data gagal diubah!');
        document.location.href = 'modify.php';        
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
    <link rel="stylesheet" href="css/stylee.css">
    <title>Ubah Data Penduduk</title>
    <style>
        
/* FOR modify.php */
.modbody {
    background-color: black;
    padding: 1em;
    width: 400px;
    border-radius: 8%;
    text-align: center;
}
.modifbody {
    display: flex;
    justify-content: center;
    margin-top: 5%;
    align-items: center;
}
    </style>
</head>
<body class="modifbody">
<div class="modbody">
    <form action="" method="post">
    <input type="hidden" name="id" value="<?=$pdk['id']?>">
        <ul class="list">
            <h2>Ubah Data Penduduk</h2>
            <li>
                <label for="fname">Nama Depan : </label>
                <input type="text" name="fname" id="fname" maxlength="20" value="<?=$pdk['fname']?>" required>
            </li>
            <li>
                <label for="lname">Nama Belakang : </label>
                <input type="text" name="lname" id="lname" maxlength="20" value="<?=$pdk['lname']?>" placeholder="Optional">
            </li>
            <li>
                <label for="nik">NIK : </label>
                <input type="text" name="nik" id="nik" maxlength="8" value="<?=$pdk['nik']?>" required>
            </li>
            <li>
                <label for="kelas">Kelas : </label>
                <input type="text" name="kelas" id="kelas" maxlength="50" value="<?=$pdk['kelas']?>" required>
            </li>
            <li>
                <label for="email">Email : </label>
                <input type="text" name="email" id="email" maxlength="50" value="<?=$pdk['email']?>" required>
            </li>
            <li class="upload">
                <label for="foto">Upload Foto : </label>
                <input type="text" name="foto" id="foto" value="<?=$pdk['foto']?>" required>
            </li>
            <li class="submit">
                <button type="submit" name="submit">Ubah Data</button>
            </li>
        </ul>
    </form>
</div>
<div class="clear"></div>
</body>
</html>