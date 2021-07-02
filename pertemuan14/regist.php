<?php
require "functions.php";
if(isset($_POST["register"])) {
    if(regist($_POST) > 0) {
        echo "<script>
        alert('User baru berhasil ditambahkan!');
        </script>";
    } else {
        echo mysqli_error($conn);
    }
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration Form</title>
    <style>
        label {
            display: block;
        }
    </style>
</head>
<body>
<h1>Registration Form</h1>
<form class="registration" action="" method="post">
    <ul>
        <li>
            <label for="username">Username : </label>
            <input type="text" name="username" id="username" maxlength="20" required>
        </li>
        <li>
            <label for="password">Password : </label>
            <input type="password" name="password" id="password" maxlength="20" required>
        </li>
        <li>
            <label for="password2">Confirm Password : </label>
            <input type="password" name="password2" id="password2" maxlength="20" required>
        </li>
        <li class="register">
            <button type="submit" name="register">Register</button>
        </li>
    </ul>
</form>
</body>
</html>