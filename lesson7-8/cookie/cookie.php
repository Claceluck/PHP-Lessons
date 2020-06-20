<?php
session_name("NEW_SESSION_NAME"); // созданная сессия просто переименовывается
// устнановка имя сесии до старта сессии
session_id(get_random()); // генерация рандомного id
session_start();

function get_random(){
    return rand(10, 40);
}

/*
session_id(); возвращает идентификатор сессии
session_id(новый идентификатор); устанвливает идентификатор сессии
session_name(); возвращает имя сессии
session_name(новое имя сесии); устанавливает имя сессии
session_regenerate_id(); генерирует новый идентификатор сессии*/

// Cookie - механизм хранения данных на стороне клиента.

// клиент -> сообщение -> сервер
// клиент <- сообщение <- сервер
// строка запроса
// заголовки: cookie ->SID+др.данные
// тело сообщения

// Данные хранятся в видеда пар: ключ - значение
// setcookie() - задает cookie
// на сервере в $_COOKIE данные будут доступны только
// после повторного обращения к серверу!!!

/*setcookie(name, value, expire, path, domain, secure, httponly);
name - имя cookie
value - значение cookie
expire - время жизни cookie ( по умолчанию == время жизни сессии)
path - путь к каталогу на сервере, для которго будут доступны cookie
domain - домен для которого будут доступны cookie
secure (true | по умолчанию false) - если установлен, то cookie будут передаваться только по https
httponly (true |по умолчанию false) - если установлен, то cookie не будут доступны в js*/

setcookie('name', 'first cookie', 0, null, null, true); // если нужно пропустить аргументы нужно визически прописать значения по умолчанию, просто так пропустить нельзя

// setcookie -> передаёт cookie в браузер, браузер сохраняет 

// $_COOKIE будут доступны после следущего запроса браузера, ппередать куки, которые сохранил ранее

var_dump($_COOKIE);

// GET запрос - проверить, если ключ 'color' в куки есть, установить данное значение, как значение переменной $color,
// в противном случае, установить $color = white

$server = $_SERVER;
if($server['REQUEST_METHOD'] === 'GET' && $_COOKIE['color']) {
$color = $_COOKIE['color'];
} else {
    $color = 'white';
}

// $server = $_SERVER;
// if($server['REQUEST_METHOD'] === 'GET') {
//     // ??
//     // переменной $color присваеваем значение $_COOKIE['color'], если оно есть и значение 'white', если $_COOKIE['color'] не существует 
//     $color = $_COOKIE['color'] ?? 'white';
// }


// POST запрос - получить из формы значение цвета, который выбрал пользователь,
// сохранить в куки по ключу 'color'

if($server['REQUEST_METHOD'] === 'POST') {
$post = $_POST;
if (isset($post['color'])){
    if($post['color'] != $_COOKIE['color']){
        setcookie('color', $post['color'], time() + 3600);
        $color = $post['color'];
    } else {
        $color = $_COOKIE['color'];
    }
}
}


?>


<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>

<body style="background: <? echo $color; ?>">

<nav>
    <a href="cookie.php">Cookie</a>
    <a href="some_page.php">Some Page</a>
</nav>

<form action="cookie.php" method="post">
    <h5>Изменить цвет фона</h5>
    <select name="color">
        <option value="red">Красный</option>
        <option value="green">Зеленый</option>
        <option value="yellow">Желтый</option>
    </select>
    <input type="submit" value="Изменить">
</form>

</body>
</html>
