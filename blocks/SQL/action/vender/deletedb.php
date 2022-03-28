<?php
        $mysql = new mysqli("localhost", "root","qazwsx","firstdb");
        $mysql->query("SET NAMES 'UTF-8'");
       
        if($mysql ->connect_error){
            echo 'Номер ошибки:  '.$mysql ->connect_errno.'<br>';
            echo"Err - ".$mysql->connect_error;
        }
        else {
            $mysql->query("DROP TABLE wer"); 
            echo"Таблица удалена";
        }    
        
        $mysql->close();
        ?>