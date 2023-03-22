<html><a href="/blocks/SQL/action/tablework.php"><img src="/pictures/back.png" width="26px" height="26px"></a>
<?php

mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);//Вывод реальных ошибок
require_once '../../../../function/connect.php';
$product_id = $_GET['id'];
$product = mysqli_query($connect, "SELECT*FROM `users`WHERE `id`='$product_id'");
$product = mysqli_fetch_assoc($product);
$comment = mysqli_query($connect, "SELECT * FROM `usershistory` WHERE `product_id` = '$product_id'");
$comment = mysqli_fetch_all($comment);

?>

<head>
    <link rel="stylesheet" type="text/css" href="/blocks/SQL/style.css">
</head>

<body>
    
    <h1>Данные:</h1>
    <font class="info"><strong>Идентификатор внутри системы: </strong><?= $product['id'] ?><br></font>
    <font class="info"><strong>Имя:</strong> <?= $product['Name'] ?><br></font>
    <font class="info"><strong>Пароль:</strong> <?= $product['Password'] ?><br></font>
    <font class="info"><strong>Почта:</strong> <?= $product['email'] ?><br></font>
    <font class="info"><strong>дата:</strong> <?= $product['date'] ?><br></font>

    <form action="crcomm.php" method="post">
        <input type="hidden" name="id" value="<?= $product['id'] ?>">
    <strong>Комментарий: </strong><textarea name="Comment"></textarea><br>
    <strong>Рейтинг: </strong><input type="number" name="Warning"><br>
    <button type="submit">Сохранить</button>
    </form>

    <h3>Comments</h3>
    <ul>
        <?php

            /*
             * Перебираем массив с комментариями и выводим
             */

            foreach ($comment as $comments) {
            ?>
                <li><?= $comments[4] ?><br> <?= $comments[2] ?> <hr> </li>
            <?php
            }
        ?>
    </ul>

</body>

</html>