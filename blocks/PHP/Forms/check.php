<?php
$name = $_POST['user'];
$pass = $_POST['password'];

if (trim($name) == "")
    echo "Веди имя, пес";
else if (strlen(trim($name)) <= 2)
    echo "Ты за меня придурка не держи, или ты ЯН?";
else if (trim($pass) == "")
    echo "Введите парольку";
else if (strlen(trim($pass)) <= 5)
    echo "Пароль должен быть не короче 6 символов";
else if (trim($_POST['massege']) =="")  { 
    echo "Дядь ты шо угараешь? Где текст сообщения?";}
    else   $_POST['password']=sha1($pass);
  //echo "<h2>Данные авторизации</h2><p><strong>Имя:</strong> $name</p><p><strong>Пароль:</strong> $pass</p><p><strong>Посление:</strong>$_POST[massege]</p>";
    echo"Данные авторизации: <br>";
  foreach($_POST as $key=>$value)
    echo"<p>$value</p>";
