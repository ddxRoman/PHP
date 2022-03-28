<?php
session_start();
$user_name = htmlspecialchars(trim($_POST['username']));
$email = htmlspecialchars(trim($_POST['email']));
$sibject = htmlspecialchars(trim($_POST['subject']));
$message = htmlspecialchars(trim($_POST['message']));

$_SESSION['username']=$user_name;
$_SESSION['email']=$email;
$_SESSION['subject']=$subject;
$_SESSION['message']=$message;

if(strlen($user_name)<=1)
$_SESSION['err_name']="Ты шо пес?";
else if(strlen($message)<=1)
$_SESSION['err_sms']="Ну ты сука пес паршивый";
else{
    $subject = "=?utf-8?8?".base64_encode($subject)."?=";
    $headers = "From: $email\r\nReply to $email\r\nContent-type: text/plain; charset=utf-8\r\n";
    mail($user_name, $subject,$message,$headers);
    //redirect();
}