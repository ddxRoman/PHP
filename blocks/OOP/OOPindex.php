<html>
<a href="/index.php" target="_blank">Назад</a>
    <br>
    
    <br><br><br>
</html>

<?php

class job extends person{ //екстенд связывает классы

        private $namejob;// Public -публичный можно юзать за пределами класса. Private - 
        public function __construct( $name, $lastname, $gender, $namejob){
            $this->namejob = $namejob;
        
        parent::__construct($name, $lastname, $gender);
            
        }
        public function setnamejob($namejob){
                $this->namejob = $namejob;
        }
        public function getnamejob(){
            return $this->namejob;
        }
}


class person{ // Сoздан класс, все методы должны находится внутри класса

    public $name; // публичные переменные
    public $lastname;// приватная переменные
    public $gender;// публичные переменные

    public function __construct( $name, $lastname, $gender){ // публичный метод
        $this->name=$name;// публичный метод
        $this->lastname=$lastname;// публичный метод
        $this->gender=$gender;// публичный метод

    }
    public function personinfo(){// публичный метод
    // return "$this->gender зовут - $this->name, его Фамилия - $this->lastname, он раотает - $this->namejob";
    }

}

//$Alex=new person('Александр', 'Брюханов', 'Мужчину');
$Alex=new job('Александр', 'Брюханов', 'Мужчину', 'Разрабом');
$Alex->name="Витюха";//name - публичная переменная к ней можно обращаться за пределами класса
$Alex->setnamejob("Раздолбай");
//echo $Alex ->personinfo();
echo"<br>";
echo $Alex->getnamejob();
//echo $Tim->personinfo();

?>