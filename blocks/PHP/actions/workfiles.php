<!DOCTYPE html>
<html lang="en">
<head>
<link rel="stylesheet" type="text/css" href="../styleLessons.css">
</head>
<body class="bodyfreym">
    <div class="all">
        <div class="left">
            <form action="" method="post">
                <input placeholder="Название файла" name="name"><br>
        <textarea name="sms" placeholder="Введите текст"></textarea>
    <br>
    <button type="submit">Сохранить</button>
    </form></div>
    <div class="right">
        <?php
        work();
        ?>
    </div>
    </div>
</body>
</html>


<?php
function work(){
$sms=$_POST['sms'];
echo "А теперь тут надо доделать вывод списка файлов и чтение их и тд и тп";
//echo $sms."Текст сообщения";
$file=fopen("../../../Files/text.txt","a+");
if(trim($sms) == ""){
    echo "<br>Введите сообщение";
}
else{
    $sms="$sms\n";// Перенос строки лучше делать константой PHP_EOL

    

//////////////////////////////////////////////////
$date=date(' от d F yг в G i s');

$name=$_POST['name'];

$FL = fopen('../../../Files/'.$name.$date.'.txt', 'w');
fwrite($FL, $sms);
fclose($FL);



}}
?>