<?php
$lis=[2,5,1,7,2];
unset($lis[3]);
$lis=array_values($lis);
echo("<strong>Вывод массива:</strong>").'<br>';
print_r($lis).'<br>';
echo'<br>'.("<strong>По возрастанию:</strong>").'<br>';
sort($lis);
print_r($lis);
echo'<br>'.("<strong>По убыванию: </strong>").'<br>';
rsort($lis);
print_r($lis);
echo'<br>'.("<strong>Поиск есть или нет: </strong>").'<br>';
if( in_array(5,$lis)=="")
    echo "<strong>Нема такого </strong>";
    else
     echo "<strong>Нашелся </strong>";
print_r($lis);
echo'<br>'.("<strong>Обрезка массива: </strong>").'<br>';
$arr =array_slice($lis,1,3);
var_dump($arr);//Вывод массив с колвом элементов и типом данных
echo'<br>'.("<strong>Склейка массивов:</strong> ").'<br>';
$arr_1=[0, 1, 2];
$arr_2=[3,4,5];
$arr_3=array_merge($arr_1,$arr_2);
print_r($arr_3);
echo'<br>'.("<strong>Рандомный порядок:</strong> ").'<br>';
shuffle($lis);
print_r($lis);
echo'<br>'.("<strong>Тип переменной:</strong> ").'<br>';
$x=99;
$px=floatval("99");
$s="99";
echo " X = 99 Это - ". gettype($x).'<br>';
echo " S = 99 Это тип - ". gettype($s). " И это число - ". is_numeric($s).'<br>';
echo " X преобразовали в флоат и теперь это - ". gettype($px).'<br>';