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
// fwrite($file, $sms);
// echo "<br> права доступа - ";
// echo fileperms("../../../Files/text.txt");
// $filename = "../../../Files/text.txt";
// $file=fopen("../../../Files/text.txt","r");
// $content=fread($file, filesize($filename));
// fclose($file);
// echo "<br>".$content;
// echo"<br>";
// //echo file_exists("../../../Files/tex1t.txt")."<br>";
// rename("../../../Files/text.txt","../../../Files/text.txt");

//unlink("name"); удаление файла

//////////////////////////////////////////////////
$date=date(' от d F yг в G i s');

$name=$_POST['name'];

$FL = fopen('../../../Files/'.$name.$date.'.txt', 'w');
fwrite($FL, $sms);
fclose($FL);



}}
?>