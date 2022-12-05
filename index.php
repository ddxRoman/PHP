<html>
<? error_reporting(E_ERROR | E_PARSE); ?>
<!-- Не выводит Варнинги на страницу-->

<head>
    <link rel="stylesheet" type="text/css" href="style.css">
    <title>Cайт с уроками по PHP</title>
</head>

<body>
    <div class="header">
        <div class="test"><a href="http://medcloud/Home.html" target="_blank">Medcloud</a></div>
        <div class="task"><a href="blocks\tasks.php" target="_blank">Tasks</a></div>
        <div class="left"><a href="/Testing.php" target="_blank">Test</a></div>
        <div></div>
    </div>

    <div class="contant">
        <h1 align="center">Всякие уроки РНР и SQL пока что</h1>
        <a href="blocks\PHP\Lessonsindex.php">
            <div class="Lesson">
                <p align="center">Уроки PHP</p>
                <a href="blocks/SQL/SQLindex.php">
                    <div class="SQL">
                        <p align="center">Уроки по SQL</p>
                        <a href="blocks/grids//index.php">
                            <div class="grid">
                                <p align="center">Уроки по Grid</p>
                                <a href="blocks/OOP/indexOOP.php">
                                    <div class="site">
                                        <p align="center">PHP ООП</p>
                                        <a href="blocks/JS/JSindexLesson.php">
                                            <div class="JS">
                                                <p align="center">Java Scripts</p>
                                                <a href="blocks/PHP/Parcer/IndexParcer.php">
                                                <div class="Parcer">
                                                    <p align="center">Парсер</p>
                                                </div>
                                                </a>
                                            </div>
                                        </a>
                                    </div>
                                </a>
                        </a>
                    </div>
                </a>
            </div>
        </a>
    </div>
    </a>
    </div>
    <!-- Что бы закоментить несколько строк 
    Используют одновременно ctrl+/ -->
</body>

</html>

<?php
mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT); //Вывод реальных ошибок 


?>