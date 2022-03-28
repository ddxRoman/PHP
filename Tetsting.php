<?php


        require_once 'function/connect.php';
        $results = mysqli_query($connect, "SELECT TABLE_NAME from INFORMATION_SCHEMA.TABLES WHERE TABLE_TYPE='BASE TABLE' AND TABLE_SCHEMA='firstdb'");
        $r2 = $results->fetch_all(MYSQLI_ASSOC);
        foreach($r2 as $rr){
            echo "<br><b>". $rr['TABLE_NAME']."</b>";
            echo '</br>';
        }
      
?>

<form method="post" action="">
<?php        echo "<SELECT name='sel'>";
        foreach($r2 as $rr)
        echo "<option>$rr[TABLE_NAME]</option>";
        echo "</SELECT>";
 ?>

<button type="submit" method="post">Выбрать</button>
</form>
<?php 
$te=$_POST['sel'];

 echo "Вот тут оно - - - - $te<br><br><br>";
 echo "<pre>";
 echo"Вывод всех данных о таблице"."<br>";
print_r($results);
 echo "<br>"."В таблице имеетя ".$results->num_rows." записей <br>";
 echo"</pre>";

$result2 = mysqli_query($connect, "SELECT * FROM `firstdb`.`$te` ORDER BY `id` ASC");
echo"Вывод всех данных о таблице"."<br>";
print_r($result2);
echo "<br>"."В таблице имеетя ".$result2->num_rows." записей <br>";
echo"<br>";
        if($result2->num_rows>0){
            resprint($result2);
        }
?>