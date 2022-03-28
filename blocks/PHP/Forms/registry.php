<!DOCTYPE html>
<html lang="en">
<?php
session_start();
require_once'../../../function/connect.php';
if($_SESSION['user']){
    header('Location: profile.php');
 }
?>
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="style.css">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Регистрация</title>
</head>

<body>
    <form action="../actions/signup.php" method="post" enctype="multipart/form-data">
        <label></label><br>
        <input type="text" name="login" placeholder="Логин"><br>
        <input type="text" name="mail" placeholder="Почта"><br>
        <input type="password" name="password" placeholder="Пароль">
        <input type="password" name="passwordconfirm" placeholder="Повторите пароль"><br>
        <label>Аватарка</label>
        <input type="file" name="avatar"><br>
        <button class="autbtn">Зарегистрироваться</button>
        

        <p class="sms"><?php 
        echo $_SESSION['sms'];
        unset($_SESSION['sms']);
        ?></p>
        
    </form>

    <a href="autorize.php">К авторизации</a>
</body>

</html>