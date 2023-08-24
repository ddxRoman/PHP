


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<style>
  table{
    border: 2px solid #000;
  }
  th{
    border: 2px solid #000;
  }
</style>

<body>
    <h2>Размер суммы всех сторон 300см, 1 сторона не более 200см</h2>
    


    <?php








$length=0;
$depth=0;
$width=0;
$summa = 300;
$max=300;
$step=5;

for($length=0;$length<=20;$length++){
    echo "<br>Легхт ". $length;
    for($depth=1;$depth<11;$depth++){
        echo "<br>  Строка нумер ". $depth;
        for($width=0;$width<10;$width++){
            echo "----".$length."-".$depth."-".$width;
        }
    }
    echo "<br>";

}
echo "Совсем конец <br>";

?>
<table>
<tr><th><b>№</b></th><th><b>Ширина</b></th><th><b>Высота</b></th><th><b>Длина</b></th><th><b>Сумма</b></th></tr>
<?
// for($i=0;$i<100;$i++){
// $length= $length+5;
// if($length<=200){

//     $summ = $depth+$length+$width;
//     if($summ<=$summa){
         ?>
        <!-- <tr><th><b>i<?=$i?></b></th><th><b><?=$length?></b></th><th><b><?=$width?></b></th><th><b><?=$depth?></b></th><th><b><?=$summ?></b></th></tr>
        <? 
    // }



    // for($j=0;$j<=100;$j++){
    // $width =$width+5;
    // if($width<=200){
        
    //         $summ = $depth+$length+$width;
    //         if($summ<=$summa){
             ?>                <tr><th><b>J<?=$j?></b></th><th><b><?=$length?></b></th><th><b><?=$width?></b></th><th><b><?=$depth?></b></th><th><b><?=$summ?></b></th></tr><?
        //     }
        
        // for($v=0;$v<=100;$v++){
        // $depth =$depth+5;
        // if($depth<=200){
        //     $summ = $depth+$length+$width;
        //     if($summ<=$summa){
        //         ?>
                <tr><th><b>V<?=$v?></b></th><th><b><?=$length?></b></th><th><b><?=$width?></b></th><th><b><?=$depth?></b></th><th><b><?=$summ?></b></th></tr>
                <?
//             }
//         }
//     }
// }
// }
// }
// }



?>
</table>




</body>
</html>

