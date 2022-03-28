<?php

$mysql = new mysqli("localhost", "root","qazwsx","firstdb");
        $mysql->query("SET NAMES 'UTF-8'");       
        $result = $mysql->query("SELECT * FROM `firstdb`.`users` ORDER BY `id` ASC");
        $mysql = new mysqli("localhost", "root","qazwsx","firstdb");
        $mysql->query("SET NAMES 'UTF-8'");
        if($mysql ->connect_error){
            echo 'Номер ошибки:  '.$mysql ->connect_errno.'<br>';
            echo"Err - ".$mysql->connect_error;
        }
        else {
            $cunt=0;
            $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
            $cp = $result->num_rows+1;
echo "<BR> $cp <BR>";
            for($j=0;$j<5000;$j++){
                echo "<BR> Кол-во записей -  $cp <BR>";
            $limit = strlen($characters) - 1;
            for ($i = 0; $i < 8; $i++) {
              $pass .= $characters[rand(0, $limit)];
            } 
               
             echo "Вот тут пароль для id№"."$j ".$pass."<br>";
             $mysql->query("UPDATE `firstdb`.`users` SET `Password`='$pass' WHERE `id`='$j'");
             $pass='';}
                }        // }
        
        $mysql->close();

        ?>