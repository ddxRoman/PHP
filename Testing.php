<?php
$tre = 'red';//можно тобишь задать сюда часть ХТМЛ кода. Наверное. 
?>

<!DOCTYPE html>
<html lang="en">

<head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
</head>

<body>
    <style>

    body{background-color: #b94;}
    </style>
<form action="" method="post">
    <input type="checkbox" value="<?= $tre ?>" name="one" > One <br>
    <input type="checkbox" name="two" > two<br>
    <input type="checkbox" value="Это адекват" name="three"> three<br>
    <input type="checkbox" name="four" > four<br>
    <input type="submit" name="sub" value="OkAY " />
</form>
</body>

</html>
<?php
echo "<pre>";

//print_r($_POST);
echo "</pre>";

$ert = $_POST['one'];
//echo $ert;


?>

<?php
echo
"<p><font color='$ert'><b>1. Надо добавить удаление пустынх строк<br> </font>
<font color='yellow'>2. Сделать проверки что бы пустные значения не добавлялись в таблицу<br></font>
3. Надо везде поменять Product на users, в том числе в Базе данных самой<br>
<font color='yellow'>4. Доработать создание таблиц, что бы можно было вводить имя, и название полей, в идеале количество полей также.</font> <br>
5. Сделать список так что бы можно было этот список редактировать, удалять, добавлять пункты, и отмечать выполненые<br>
<font color='green'>6. Поправить кнопик в верхнем фрейме<br></font>
7. Письма на странице пхп сделать формы, и сделать что бы обратная связь сохранялась в папку.<br>
<font color='green'>8. Перенести эту борду на главную страницу<br></font>
9. Github <br>
<font color='green'>10. Добавление Юзера по шаблону имени и с выбором количества записей <br></font>
<font color='green'>11. По красоте надо сделать в кнопке Выборка селект который будет позволять выбрать Таблицу и получить по ней инфу<br></font>
<font color='green'>12. Сделать нормальную рандомную генерацию паролей<br></font>
<font color='green'>13. Доработка, теперь юзеры добавляются кол-во штук, с приростом айди. было 10, добавили 5, стало 15 с номерами от 10 до 15-го.<br></font>
<font color='green'>14. Сделать что бы таблица создавалась с авто инкрементом. <br></font>
<font color='red'>15. Проблемно передаются айдишники, в них нумерация сбита, берется не id а кол во строк, поэтому если есть 20 строк, с айди 40-60, то на эти записи не генеряится пароли.  <br></font>
<font color='red'>16. Это все надо превратить в таск менеджер <br></font>
<font>17. В радактировании таблиц, если таблица пустая то не выводится форма для добавления записи, потому что форма находится в if'е <br></font>
<br>
</b></p>"; ?>