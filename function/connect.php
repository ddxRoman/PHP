<?php
$connect = mysqli_connect('localhost', 'root','qazwsx','firstdb');
if(!$connect){
    echo"<p class='err'>Не удалось подключиться</p>";
}
else echo "<p class='ok'>Подключение стабильно <img src='../../../../pictures/ok.gif' weight='18px' height='18px'</p>";

/*Функция печати*/

function resprint($result){
        while($row=$result->fetch_assoc()){
            echo "<b>ID:</b> ".$row['id'];
            echo "<b> Имя:</b> ".$row['Name'];
            echo "<b> Пароль:</b> ".$row['Password'];
            echo "<b> Почта:</b> ".$row['email'];
            echo "<hr> <br>";
        }
    }



    ?>