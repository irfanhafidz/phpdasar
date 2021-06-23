<?php
if (isset($_POST["submit"])) {
    if ($_POST["username"] == "admin" && $_POST["password"] == "123") {
        header("Location: profile.php");
        exit;
    } else {

        $error = true;
        }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Form - PHP Training</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<h3>Silahkan Login!</h3>
<?php if(isset($error)){ ?>
    <p class="wrong">Username / Password salah!</p>
<?php } ?>
<ul class="list">
    <form action="login.php" method="post">
    <li>
    <label for="username">Username : </label>
    <input id="username" type="text" name="username">
    </li>
    <li>
    <label for="password">Password : </label>
    <input id="password" type="password" name="password">
    </li>
    <li><button type="submit" name="submit">Login</button></li>
    </form>
</ul>
</body>
</html>