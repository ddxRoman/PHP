<?php
        $mysql = new mysqli("localhost", "root","","firstdb");
        $mysql->query("SET NAMES 'UTF-8'");
        if($mysql ->connect_error){
            echo 'Номер ошибки:  '.$mysql ->connect_errno.'<br>';
            echo"Err - ".$mysql->connect_error;
        }
        else {
            $id=40;
           // $name="PHP №37";
            $mysql->query("DELETE FROM `firstdb`.`users` WHERE `id`>=0 /*AND `name`=$name */");
        }
        echo " Таблица очищена под 0";
        $mysql->close();
    
        ?>