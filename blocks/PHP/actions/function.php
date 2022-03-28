<title>Function</title>
<?php
echo"Функиця сложения всех чисел<br>";
function summary($arr)
{
    $summa = 0;
    foreach ($arr as $value) {
        $summa += $value;
    }
    return $summa;
} 
$list = [3, 8, 4];
echo summary($list) . "<br>";
echo summary([3, 1, 7]) . "<br>";
echo"Функиця глобальной переменной<br>";
function info()
{
    global $x;
}
$x=55;
info();
echo $x."<br>";
echo"Функиця счетчика<br>";
function click(){
    static $count;
    $count++;
    echo $count."<br>";
}
click();
click();
click();


?>