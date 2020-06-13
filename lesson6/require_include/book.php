<?php

require_once "data.php"; // копируется всё содерржимое файла

$books = getBooks();
$get = $_GET; // вызываем глобальный массив GET
$id_books = $get['id']; 
$book = $books[$id_books - 1]; // отнимаем от id -1  так как индексы считаются с 0 а id с 1
// теперь $book это один элемент массива 
// var_dump($get);
?>


<!doctype html>

<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title><? echo $book['title'] ?></title> 
</head>

<body>
<!-- добавляем include_once хеадер -->
<? include_once "components/header.php" ?> 

<h3>Название:<? echo $book['title'] ?></h3>

<p>Автор: <? echo $book['author'] ?> </p>

<img src="img/<? echo $book['img'] ?>">
<p>Стоимость: <?echo $book['price']?> </p>

<!-- добавляем include_once футер -->
<? include_once "components/footer.php" ?>
</body>

</html>
