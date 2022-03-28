<html>

<head>
    <link rel="stylesheet" type="text/css" href="style.css">
    <title>Cайт с уроками по PHP</title>
</head>

<body>
    <div class="header">
        <div class="test"><a href="http://medcloud/Home.html" target="_blank">MC</a></div>
        <div class="task"><a href="blocks\tasks.php" target="_blank">Tasks</a></div>
        <div class="test"><a href="/Tetsting.php"             target="_blank">T</a></div>
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
                                <a href="blocks/OOP/OOPindex.php">
                                    <div class="site">
                                        <p align="center">PHP ООП</p>
                                    </div>
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