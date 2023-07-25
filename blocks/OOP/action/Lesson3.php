<?

class Animal{
    protected $name;
    public $age;
    public $color;

    public function __construct($name,$age,$color)
    {
        $this->name=$name;
        $this->age=$age;
        $this->color=$color;
    }
}

class Dog extends Animal{
 public $breed;

 public function __construct($name,$age,$color,$breed)
 {
    $this->name=$name;
     $this->age=$age;
     $this->color=$color;
     $this->breed=$breed;
 }

 public function makeSound()
{
    ?>
    
    <audio
        controls
        src="../../../Files/Звуки/pugs.m4a">
    </audio>
    
    
    <?
    echo '<br>Pugs make sound "Buff"';
}

 public function move(){
    echo "Age - ". $this->age;
echo "<br> Name - - ". $this->name;
 }
}

$pug = new Dog('Пряник','10','полевой','Мопсик');
$pug->makeSound();
echo "<br>".$pug->breed;
$pug->move();



?>






<style>
    body{
        color: green;
        font-weight: 600;
        font-size: 14pt;
    }
</style>