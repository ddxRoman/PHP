<?php
session_start();
require_once'../../../function/connect.php';
$login=$_POST['login'];
$mail=$_POST['mail'];
$password=$_POST['password'];
$passwordconf=$_POST['passwordconfirm'];
$avatar=$_FILES['avatar'];

if($password==$passwordconf){
/*Картинка*/
$path='../../../pictures/avatar/'.time().$_FILES['avatar']['name'];
if(!move_uploaded_file($_FILES['avatar']['tmp_name'],$path)){
    $_SESSION['sms']='Ошибка аватара';
    header('Loction:../Forms/registry.php');
}
/*Выводим на экран*/
echo "<pre>";
print_r($_POST);//Вывод всего массива, не по переменным
echo"<br>";
print_r($_FILES); //автарка
echo "</pre>";

$password=md5($password);

/*добавление бд*/

mysqli_query($connect, "INSERT INTO `user` (`id`, `login`, `password`, `email`, `avatar`, `date`) 
VALUES (NULL, '$login', '$password', '$mail', '$path', CURRENT_DATE())");

$_SESSION['sms']='<br>Регистрация завершена';
header('Location: ../Forms/autorize.php');
}
else{
    $_SESSION['sms']='<br>Пароли не совпадают';
    header('Location: ../Forms/registry.php');
}

?>

