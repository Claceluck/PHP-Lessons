<?php
// подключение php файлов в текущий файл:
// если файл не найден будет ошибка, выполнение текущего скрипта завершится
// require "путь к файлу";
// require_once "путь к файлу";

require_once "data.php"; // копируется всё содерржимое файла

$books = getBooks();
// var_dump($books);
// если файл не найден , текущий скрипт продолжит выполнение 
// include "путь к файлу";
// include_once "путь к файлу"; // не даёт дублироваться подключениям

?>


<!doctype html>

<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Главная</title>
</head>

<body>

<!-- подключение хеадера  include_once не даёт дублироваться подключениям-->
<? include_once "components/header.php" ?> 

    <div>
    <!-- через цикл foreach перебераем массив который поключили в начале в php скрипте-->
    <?foreach($books as $book): ?>
    <!-- всё выводим через echo -->
        <h3>Книга <?echo $book['title']?> </h3>
        <h6>Автор: <?echo $book['author']?> </h6>
        <img width="400" height="200" src="img/<?echo $book['img']?>">
        <p>Стоимость <?echo $book['price']?></p>
        <a href="book.php?id=<?echo $book['id']?>">Подробнее...</a>
    <? endforeach; ?>
    </div>
<!-- подключаем футер -->
<? include_once "components/footer.php" ?>

</body>

</html>
