<?php
session_start(); // инициализация сессии
// запуск новой или востановление предыдущей сессии
// каждой новой сессии присваиваеться SID, 
// востановление сессии происходит по ранее созданному 
// SID

// для сохранения данных между последовательными запросами используеться суперглобальный массив $_SESSION ( в данном массиве мы храним данные)

$_SESSION['login'] = 'qwe';
$_SESSION['auth'] = true;

// session1.php
//механизм сессии - сохранение данных между 
// последовательными запросами

// проверка наличия переменной в массиве $_SESSION

var_dump(isset($_SESSION['login'])); // isset вернёт true если ключ есть и false если нет
var_dump(isset($_SESSION['auth']));

// unset($_SESSION['auth']);
// $_SESSION = []; // удалить всё
// session_destroy(); уничтожить сессию

$login = 'qwe';


?>

<a href="session2.php">session1</a> 
