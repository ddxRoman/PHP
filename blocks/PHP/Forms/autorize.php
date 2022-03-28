<?php
session_start();
if($_SESSION['user']){
   header('Location: profile.php');
}
    ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="/blocks/PHP/Forms/style.css">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Авторизация</title>
</head>

<body>
    <h3>Форма авторизации</h3>
    <br><br>
    <form action="../actions/signin.php" method="post">
        <input class="aut" name="login" type="text" placeholder="Введите логин"><br>
        <input class="aut" name="password" type="password" placeholder="Введите пароль">
        <button type="submit" class="autbtn">Войти</button>
        <br>
        <a href="registry.php">Регистрация</a>
        <p class="Password"><?php 
        echo $_SESSION['sms'];
        unset($_SESSION['sms']);
        ?></p>
    </form>
</body>

</html>