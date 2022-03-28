<form action='' method="get">
<input type="number" name="id">
<button type="submit">Ок</button>
</form>

<?php
require_once '../../../../function/connect.php';

$id = $_GET['id'];
mysqli_query($connect, "DELETE FROM `users` WHERE `users`.`id` = '$id'");
echo "Пользователь под номером $id удален";

//header('location: delete2.php');
?>