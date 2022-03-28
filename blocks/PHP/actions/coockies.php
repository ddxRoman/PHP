<?php
session_start(); // ссесия открывается в начале файла
$name = "Roma";
/*setcookie("user",$name,time()+5);// чтобы ужалить мтавим минус время
print_r($_COOKIE);
echo'<br>';
echo $_COOKIE['user'];
echo "<br>"."<br>"."<br>";*/
// Далее Сессия
 $_SESSION['user_name']=$name;
 if($_SESSION['user_name']=="Roma")
 echo "Все ок, работает тебя зовут $name";
 else 
 echo "Неа, не оно. не пашет братец";
 //unset($_SESSION['user_name']);// удаление сессии
 //session_destroy(); //полностью закрывается ссессия по всем 