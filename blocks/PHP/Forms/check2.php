<?php
$name = $GET['user'];
$pass = $GET['password'];

if (trim($name) == "")
    echo "Веди имя, пес";
else if (strlen(trim($name)) <= 2)
    echo "Ты за меня придурка не держи, или ты ЯН?";
else if (trim($pass) == "")
    echo "Введите парольку";
else if (strlen(trim($pass)) <= 5)
    echo "Пароль должен быть не короче 6 символов";
else if (trim($GET['massege']) == "") {
    echo "Дядь ты шо угараешь? Где текст сообщения?";
} else   $GET['password'] = sha1($pass);
echo "Данные авторизации Вариант 2: <br>";
header('location: changeForms.php');
exit;
