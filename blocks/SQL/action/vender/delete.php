

<?php
require_once '../../../../function/connect.php';

$id = $_GET['id'];
echo "<br>Тот самый  АЙДи_--__--".$id;
mysqli_query($connect, "DELETE FROM `users` WHERE `users`.`id` = '$id'");
echo "Надо разобратся откуда передается id и по какой логике удаляется";
header('location: ../tablework.php');
?>