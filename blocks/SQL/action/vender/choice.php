<?php
require_once '../../../../function/SelectTable.php';

// function resprint($result){
//     while($row=$result->fetch_assoc()){
//         echo "<b>ID:</b> ".$row['id'];
//         echo "<b> Имя:</b> ".$row['Name'];
//         echo "<b> Пароль:</b> ".$row['Password'];
//         echo "<b> Почта:</b> ".$row['email'];
//         echo "<hr> <br>";
//     }
// }


        $mysql = new mysqli("localhost", "root","qazwsx","firstdb");
        $mysql->query("SET NAMES 'UTF-8'");
        if($mysql ->connect_error){
            echo 'Номер ошибки:  '.$mysql ->connect_errno.'<br>';
            echo"Err - ".$mysql->connect_error;
        }
        else {
            $result = $mysql->query("SELECT * FROM `firstdb`.`users` ORDER BY `id` ASC");
            echo"Вывод всех данных о таблице"."<br>";
            print_r($result);
            echo "<br>"."В таблице имеетя ".$result->num_rows." записей <br>";
        }    
        
        
        echo"<br>";
        if($result->num_rows>0){
            resprint($result);
        }
        echo '<hr color=red>';
        $result = $mysql->query("SELECT `id`, `Name`,`Password` FROM `firstdb`.`users` ORDER BY `id` ASC");
        resprint($result);
        echo '<hr color=yellow>';
        $result = $mysql->query("SELECT * FROM `firstdb`.`users` WHERE `id`<7");
        resprint($result);
        echo '<hr color=blue>';
        $result = $mysql->query("SELECT * FROM `firstdb`.`users` ORDER BY `id` ASC LIMIT 3 ");
        resprint($result);

        $mysql->close();
?>
