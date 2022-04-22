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
    <link rel="stylesheet" type="text/css" href="style.css">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Авторизация</title>
</head>

<body>
  
    <form action="../actions/signin.php" method="post">
    <div class="profForm">
       <div class="dateprof"> 
           <input class="autsmall" name="login" type="text" placeholder="Введите логин"><br>
        <input class="autsmall" name="password" type="password" placeholder="Введите пароль">
        </div>
        <div class="btnprof">
        <button class="btn" type="submit" class="autbtnsmall">Войти</button>
        </div>
        <p class="Password"><?php 
        echo $_SESSION['sms'];
        unset($_SESSION['sms']);
        ?></p>
            </div>
    </form>

</body>

</html>