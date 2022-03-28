<?php

require_once '../../../../function/connect.php';
$id = $_POST['id'];
echo $id."- Айди<br>";
$com = $_POST['Comment'];
echo $com."- Комментарий<br>";
$wr = $_POST['Warning'];
echo $wr."- Рейтинг <br>";
$date = $_POST['date'];
echo $date."- Дата <br>";


//INSERT INTO `usershistory` (`id`, `product_id`, `Comment`, `Warning`) VALUES (NULL, NULL, '', '')


mysqli_query($connect, "INSERT INTO `usershistory` (`id`, `product_id`, `Comment`, `Warning`, `date`)
 VALUES (NULL, '$id', '$com', '$wr', CURRENT_DATE())");
 header('location: view.php?id=' . $id);