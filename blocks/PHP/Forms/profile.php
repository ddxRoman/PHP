<?php
session_start();
echo $login. $password;
if(!$_SESSION['user'])
{
   header('Location: ../Forms/autorizesmall.php');
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="style.css">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>profile</title>
</head>
<body>     
    <div class="allaut"> 
        <div class="profile1aut">
 <img src="<?=$_SESSION['user']['avatar']?>" width="200px">
</div> <font>
 <div class="profile2aut">
 Ник: <?=$_SESSION['user']['login']?><br>
 Роль: <?=$_SESSION['user']['role']?><br>
 Почта: <?=$_SESSION['user']['email']?><br>
 Дата регистрации: <?=$_SESSION['user']['date']?><br>
    <a class="logout" href="../actions/logout.php">Выход</a></div></font>
</div>   
</body>
</html>