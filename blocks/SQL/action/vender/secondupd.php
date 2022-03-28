<?php



require_once '../../../../function/connect.php';

$id = $_POST['id'];
$Name = $_POST['Name'];
echo $Name." - Тута имя <br>"; 
$Password = $_POST['Password'];
echo $Password." - Тута Паролька  <br> "; 
$email = $_POST['email'];
echo $email." - Тута Пошта  <br> "; 
mysqli_query($connect, "UPDATE `users` SET  `Name` = '$Name', 
`Password` = '$Password', `email` = '$email' WHERE `id` = '$id'");



header('location: ../tablework.php');
?>