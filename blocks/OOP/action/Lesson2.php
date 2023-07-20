<h2>Lesson 2</h2>
<?php
// class brokerAccount{
// public $numder;
// public $balance;
// public $profit;
// private $papers;
// private $money;
// public $operation;

// public function buy(){   
// }
// public function sold(){

// }
// public function CalcProfit(){

// }
// public function ShowProfit(){

// }
// public function CalcMoney(){

// }


// }


class BankAccount{ // Ну это мы класс обьявили
private $name; // Создали приватно имя
public $balance; // Публичынй баланс
private $dateReg;
public $addMoney;

public function __construct($name, $dateReg, $balance) // Конструктор, в нём мы задали переменные которые получаем из вне, при создании объекта класса
{
    $this->balance=$balance; // Вот тут определили что в этом классе вот это значение будет равно переменной полученой при создании
    $this->dateReg=$dateReg;
    $this->name=$name;
}


public function ShowName(){ // Функция вывода имени
    return $this->name;
}
public function showBalance(){ 
    return $this->balance;

}
public function UpdBalance($addMoney){ // Функция апгрейда баланса
   $balance=$this->balance; // Тут мы получили баланс снаружи функции
    echo "<br>".$addMoney."<br>";

    $this->balance = $balance+$addMoney; // Тут берем через this я не знаю почему. вот рил нет ответа. Если сделать без Зис то не меняет значение.
    return $this->balance;    //Возвращаем значение баланса, хотя если это убрать то оно тоже работает всё.
}

public function showData(){
    return $this->dateReg;
}

}
$account = new BankAccount('Роман','04-03-2023','32000'); // Создали новый обьект и задали параметры
// Просто добавление HTML формы для ввода данных.................................................................................................................
?>
<form action="#" method="post">
    <input type="number" name="add">
    <button>ГОУ</button>
</form>
<?
// Конеч всего этого цирка........................................................................................................................................
$addMoney = $_POST['add'];// Ну это просто получил из инпута цыфру
echo "Name - ".$account->ShowName()." "; // Вызвал метод класса обьекта. 
$account->UpdBalance($addMoney); // Вызвал метод класса объекта, передав в него значение
echo "Balance - ". $account->balance; // Вызвал параметр Класса обьекта
echo "<br> Date Registration - ".$account->showData(); // Вызвал метод обьекта класса


?>


<style>
    body{
        color: green;
        font-weight: 600;
        font-size: 14pt;
    }
</style>