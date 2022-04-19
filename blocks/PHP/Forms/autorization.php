<?php
session_start();
echo $login. $password;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="style.css">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile</title>
</head>
<body>     
    <div class="all"> 
        <div class="profile1">
 <img src="<?=$_SESSION['user']['avatar']?>" width="50px">
</div> 
 <div class="profile2">
 <?=$_SESSION['user']['login']?><br>
    <a class="logout" href="../actions/logout.php">Выход</a></div>
</div>   
</body>
</html>