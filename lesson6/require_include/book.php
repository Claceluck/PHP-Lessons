<?php

require_once "data.php"; // копируется всё содерржимое файла

$books = getBooks();
$get = $_GET;
$id_books = $get['id'];
$book = $books[$id_books - 1];
?>


<!doctype html>

<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title><? echo $book['title'] ?></title>
</head>

<body>
<? include_once "components/header.php" ?>

<h3>Название:<? echo $book['title'] ?></h3>

<p>Автор: <? echo $book['author'] ?> </p>

<img src="img/<? echo $book['img'] ?>">
<p>Стоимость: <?echo $book['price']?> </p>

<? include_once "components/footer.php" ?>
</body>

</html>
