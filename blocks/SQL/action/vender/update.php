<html>
    <head>
    <link rel="stylesheet" type="text/css" href="/blocks/SQL/style.css">
    </head>
</html>

<?php

require_once '../../../../function/connect.php';
$product_id = $_GET['id'];
$product=mysqli_query($connect, "SELECT*FROM `users`WHERE `id`='$product_id'");
$product=mysqli_fetch_assoc($product);
?>
<html>
    <head>

    </head>
    <body>
    <form action="secondupd.php" method="post">
                <input type="hidden" name="id" value="<?=$product['id']?>">
                <p>Name</p>
                <input type="text" name="Name" value="<?=$product['Name']?>">
                <p>Password</p>
                <input type="text" name="Password" value="<?=$product['Password']?>">
                <p>Mail</p>
                <input type="text" name="email" value="<?=$product['email']?>">
                <button type="submit">Редактировать</button>

            </form>
    </body>
</html>