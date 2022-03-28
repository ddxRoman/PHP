<?php
require_once '../../../../function/connect.php';
$date= date('d m Y') . '<br>';
$Name = $_POST['Name'];
$Password = $_POST['Password'];
$email = $_POST['email'];
if($Name==""){
echo"<font color='RED'>ОШИБКА!!!<br>Введите Имя</font><br><a href='../tablework.php'>Назад</a>";
}else{
mysqli_query($connect, "INSERT INTO `users` ( `id`, `Name`, `Password`, `email`) 
VALUES (NULL, '$Name', '$Password', '$email')");
header('location: ../tablework.php');
}