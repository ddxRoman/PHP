<?php
session_start();
require_once'../../../function/connect.php';
$login=$_POST['login'];
$password=md5($_POST['password']);
$check_user = mysqli_query($connect, "SELECT * FROM `user` WHERE `login`='$login' AND `password` = '$password' ");

if(mysqli_num_rows($check_user)>0){

    //Успех
    $user= mysqli_fetch_assoc($check_user);
    echo "<br>";
    print_r($check_user);
    $_SESSION['user'] = [
        "id"=>$user['id'],
        "login"=>$user['login'],
        "email"=>$user['email'],
        "avatar"=>$user['avatar'],    
        "role"=>$user['role'],  
        "date"=>$user['date']  
    ];
     header('Location: ../Forms/profile.php');


}
else{
    $_SESSION['sms']='<br>Не верный логин или пароль';
header('Location: ../Forms/autorize.php');
}
?>
<pre>
    <?php
    echo"Вот тут";
print_r($user['avatar']);
    print_r($user);
    ?>
</pre>