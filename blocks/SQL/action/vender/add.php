<?php
$count=$_POST['coll'];
$sample=$_POST['sample'];
$sample="$sample#";

echo " Пользователь с шаблоном имени - $sample добавлен  $count-раз<br>";
        $mysql = new mysqli("localhost", "root","qazwsx","firstdb");
        $result = $mysql->query("SELECT * FROM `firstdb`.`users` ORDER BY `id` ASC");
        $mysql->query("SET NAMES 'UTF-8'");
        if($mysql ->connect_error){
            echo 'Номер ошибки:  '.$mysql ->connect_errno.'<br>';
            echo"Err - ".$mysql->connect_error;
        }
        else {
            /////////////////////////////
            $cp = $result->num_rows+1;
            //echo "Первый ЦП - $cp <br> $count - а тут каунт";
            $count=$count+$cp;
            //echo "А тут каунт + цп $count";
            ////////////////////////////
            /*Добавление Юзера в таблицу*/
            for($i=$cp;$i<$count;$i++)
            {
                $id=$i;
                $name=$sample.$id;
                $pass= rand();
        
////////////////////////Для базы Юзерз, очень коряво и через жопу//////////////////////////
$mysql->query ("INSERT INTO `firstdb`.`users` (
    `id`, `Name`, `Password`, `email`) 
    VALUES ('$id', '$name', '$pass', 'post')");
//////////////////////////////////////////////////
          }  


    //     $mysql->query ("INSERT INTO `firstdb`.`biography` (
    //         `id`, `fio`, `bio`) 
    //         VALUES ('$id', '$name', '$pass')");
    //         echo"Пользователь <b>$name</b> добавлен в таблицу"."<br>";
    //    }
    //     echo $i." Пользователей добавлено в таблицу";
    $mysql->close();
}
        ?>