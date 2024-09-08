<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>METANIT.COM</title>
</head>
<body>
    <h1>Сайт на PHP</h1>
    <?php
    echo "Hello, world!"; // Вывод текст на страницу
    // echo "Пока мир";
    /*
    Многострочный 
    комментарий
    */
    ?>

    <h1>
        <?php
        echo "Первый сайт на PHP";
        ?>
    </h1>
    <div>
        <?php
        echo "<h2>Заголовок парграфа</h2>";
        echo "Текст параграфа";
        ?>
    </div>
    <div>
        <?= "Привет, мир!"; ?>
    </div>
    <div>
        2 + 2 = <?= 2+2 ?>
    </div>
</body>
</html>