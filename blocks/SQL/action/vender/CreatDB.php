<html>

<body>
  <form action="" method="post">
      <input type="text" name="nameDB" placeholder="Введите название таблицы"><br>
      <input type="text" name="first" placeholder="Введите первое поле таблицы"><br>
      <input type="text" name="second" placeholder="Введите второе поле таблицы"><br>
      <input type="text" name="third" placeholder="Введите третье поле таблицы"><br>

      <button>Создать</button>

  </form>

</body>
</html>


<?php
        $BDname=$_POST['nameDB'];
        $one=$_POST['first'];
        $two=$_POST['second'];
        $three=$_POST['third'];
        $mysql = new mysqli("localhost", "root","qazwsx","firstdb");
        $mysql->query("SET NAMES 'UTF-8'");
        if($mysql ->connect_error){
            echo 'Номер ошибки:  '.$mysql ->connect_errno.'<br>';
            echo"Err - ".$mysql->connect_error;
        }
        else {
               $mysql->query ("CREATE TABLE `firstdb`.`$BDname`(
              `id` INT(3) NOT NULL AUTO_INCREMENT,
              `$one` VARCHAR(50) NOT NULL, 
              `$two` VARCHAR(200) NOT NULL,
              `$three` VARCHAR(200),
              PRIMARY KEY (`id`)
               )");
          echo"Таблица $BDname создана";
        }    
        
        $mysql->close();
        ?>

        <!-- SELECT * FROM sys.database 