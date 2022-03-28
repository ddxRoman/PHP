<?php

 require_once '../../../function/connect.php';
echo"<br>Сюда надо затягивать еще название столбцов для таблицы";

 $results = mysqli_query($connect, "SELECT TABLE_NAME from INFORMATION_SCHEMA.TABLES WHERE TABLE_TYPE='BASE TABLE' AND TABLE_SCHEMA='firstdb'");
 $r2 = $results->fetch_all(MYSQLI_ASSOC);
 $te=$_POST['sel'];
 foreach($r2 as $rr){

 }

?>

<form method="post" action="">
<?php        echo "<SELECT name='sel'>";
echo "<option></option>";
 foreach($r2 as $rr)
 echo "<option>$rr[TABLE_NAME]</option>";
 echo "</SELECT>";

 $result2 = mysqli_query($connect, "SELECT * FROM `firstdb`.`$te` ORDER BY `id` ASC");
 ?><button type="submit" method="post">Выбрать</button><?php
        if($result2->num_rows<=0){
            echo"Выберите таблицу";
        }
        else{
?>


</form>
<?php 

 ?>
<html>
    <head>
    <link rel="stylesheet" type="text/css" href="/blocks/SQL/style.css">
    </head>
    <body>
    <form action="vender/create.php" method="post">
                <p>Name</p>
                <input type="text" name="Name">
                <p>Password</p>
                <input type="text" name="Password">
                <p>Mail</p>
                <input type="text" name="email">
                <button type="submit">Добавить</button>

            </form>
        <table>
            <tr>
                <th>id</th>
                <th>Имя</th>
                <th>Пароль</th>
                <th>Почта</tr>
            </tr>
        
        
        
        <?php
            $product =mysqli_query($connect, "SELECT * FROM `$te`");
           // if($result2->num_rows>0){
            $product=mysqli_fetch_all($product);
            foreach($product as $products){   
                ?>
           
                <tr></tr>
                <td><?= $products[0] ?></td>
                <td><?= $products[1] ?></td>
                <td><?= $products[2] ?></td>
                <td><?= $products[3] ?></td>
                <td><a href="vender/view.php?id=<?= $products[0] ?>"><img src="/pictures/view.png" width="24px" height="24px"></a></td>
                <td><a href="vender/update.php?id=<?= $products[0] ?>"><img src="/pictures/edit.png" width="24px" height="24px"></a></td>
                <td><a href="vender/delete.php?id=<?= $products[0] ?>"><img src="/pictures/delete.png" width="24px" height="24px"></a></td>
                </tr>


            
            <?php
            }
        }
            ?>
            
            
         
            </table>
   
    </body>
    <!-- echo "<h2>Работа с таблицей </h2>";
c - create
r-read
u-update
d-delete
 -->
</html>