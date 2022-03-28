<?php


        require_once 'connect.php';
        $results = mysqli_query($connect, "SELECT TABLE_NAME from INFORMATION_SCHEMA.TABLES WHERE TABLE_TYPE='BASE TABLE' AND TABLE_SCHEMA='firstdb'");
        $r2 = $results->fetch_all(MYSQLI_ASSOC);
        foreach($r2 as $rr){

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



$result2 = mysqli_query($connect, "SELECT * FROM `firstdb`.`$te` ORDER BY `id` ASC");
        if($result2->num_rows>0){
            resprint($result2);
        }
?>