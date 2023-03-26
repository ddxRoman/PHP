<html>
    <head>
    <link rel="icon" type="image" href="/pictures/JS.png">
    <link rel="stylesheet" type="text/css" href="/Style/button.css">
    <link rel="stylesheet" type="text/css" href="/blocks/JS/style.css">
    </head>
<body>
    <div class="telo">

    <a href="../JS/Who_my_Wife.php"><button class="fun"><p>RESTART</p></button></a><br>
    <a href="../JS/index.html"><button class="fun"><p>Назад</p></button></a>
    </div>

</body>
    </html>

<script>
    let variant = ["Чудо-Женщина","Чудо-женщина","чудо-женщина","Кошечка","кошечка","сонечко","Сонечко"]
    maxVar=variant.length;
let message = 'Мое первое сообщение, в моей первой переменной ', age='мне 28 лет. ', status=' И у меня есть красавица жена';
name= prompt('Как вас зовут? ', ['Роман']);
age = prompt('Сколько вам лет?', ['28']);
alert(`Добрый день, ${name},  И так значит вам ${age} лет, и вы написали свои первые скрипты`);
let love = prompt("Кто ваша Жена?")
for(i=0;i<maxVar;i++)
{
if(love==variant[i])
{
    k=9 // присваивание л девятки условия 
    i=maxVar // какая то костылина
    alert("Проверка пройдена. Хорошего вам дня, Роман.")
}
else k=3; // присваиваем к тройку что бы потом проверить
// alert(`Внутри фора ${k} а ай равно - ${i}`)
}
// alert(`Вышли из фора ${k} а ай равно - ${i}`)
if(k==3){

    alert("Вы не Роман. Вам закрыт доступ. Идите нахуй")
}
</script>
