
<p>Письмо лежит в текстовом файле по адресу C:\OpenServer\userdata\temp\email</p>
<?php


$day=date(' j l F Y год') ;
 $time= date(' G i s') ; 
$sms ="Это тестовое письмо, оно было отправилено - $day в $time";
$to ="ddxman@mail.ru";
$from ="r.oksentiy@mail.ru";
$sub = "Тема сообщения";

$sub = "=?utf=B?B?".base64_encode($subject)."?=";
$head="From: $from\r\nReply to $from\r\nContent-type: text/plain; charset=utf-8\r\n";

mail($to, $sub,$sms,$head);
// Отправка с локального сервака не работает, такой функциии не существует
