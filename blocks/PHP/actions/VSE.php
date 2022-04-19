<?php

$A=65;
switch($A)
{
    case 65:
        echo"Verno";
        break;
    case 73:
        echo"Xynta";
        break;
}
echo"<br>"."<br>"."<br>";
$i=1;
for($i=0;$i<=10;$i++)
{
    echo "Вот такая цифра  -     ".'<tr>'.$i."<br>";
}
$coll = 10;
$coll+=12;
echo "<br> Колл - - - - - ".$coll;

echo "<br> Создаем Массив и выводи кусочки ";
$text = "Testing Text";
$ru="Русский";
echo "<br>".$ru[2];
echo $text[5];
?>

