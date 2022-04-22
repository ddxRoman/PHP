<body>
    <div class="head">
        <div class="back">
            <a href="/index.php"><button>Назад</button></a>
        </div>
             <div class="profile">
               <iframe class="autorize" name="2" src="../PHP/Forms/profile.php"></iframe>
            </div> 
        <div class="restart"> <a href="/blocks/PHP/LessonsIndex.php"><button>ГАЛАВА</button></a></div>
        <div class="date"><?php
                            session_start();
                            echo date('Сегодня j l F Y год') . '<br>';
                            echo date('Время: G i s') . '<br>';
                            ?>
        </div>
    </div>
    <div class="Nav">
        <p>
            <a href="../../../blocks/PHP/Forms/1.html" target="1"><button>Очистить</button>
                <a href="../../../blocks/PHP/actions/mass.php" target="1"><button>Массивы</button>
                    <a href="../../../blocks/PHP/actions/VSE.php" target="1"><button>Цикл</button>
                        <a href="../../../blocks/PHP/actions/function.php" target="1"><button>Функция</button></a>
                        <a href="Forms/changeForms.php" target="1"><button>Формы</button></a>
                        <a href="../../../blocks/PHP/actions/mail.php" target="1"><button>Отправить письмо</button></a>
                        <a href="../../../blocks/PHP/actions/function2.php" target="1"><button>Встроенные функции</button></a>
                        <a href="../../../blocks/PHP/actions/workfiles.php" target="1"><button>Файлы</button></a>
                        <a href="../../../blocks/PHP/actions/info.php" target="1"><button>ИНФО</button></a>
                        <a href="../../../blocks/PHP/actions/coockies.php" target="1"><button>Куки</button></a>
                        <a href="../../../blocks/PHP/actions/feedback.php" target="1"><button>Обратная связь</button></a>
                        <a href="/blocks/PHP/Forms/autorize.php" target="1"><button>Авторизация</button></a>

        </p>
    </div>
    <div class="lin">

        <div class="input">

            <iframe class="freym" name="1" src="">
            </iframe>
        </div>
    </div>
</body>

</html>