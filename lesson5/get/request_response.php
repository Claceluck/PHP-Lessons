<?php
// Запросы GET и POST

// кликнт -> запрос -> сервер
// клиент <- ответ <- сервер

// запрос и ответ - сообщение:
// 1. строка запроса (адрес, метод передачи данных, версия протокола передачи данных)
// 2. HTTP заголовки ()
// 3. тело сообщения 

// строка запроса должна содержать:
// 1. латинские бквы
// 2.  цифры 
// 3. некторые знаки препинания
// все допустимые символы должны кодироваться

// суперглобальные массивы
// ко всем суперглобальным массивам не принято обращаться на прямую
$server = $_SERVER;
// var_dump($server);

// корневая директория 
$document_root = $server['DOCUMENT_ROOT'];
var_dump($document_root);

$request_uri = $server['REQUEST_URI'];
var_dump($request_uri); // '/lesson5/get/request_response.php'


// методы передачи данных

$method = $server['REQUEST_METHOD'];
var_dump($method);

// GET
// при передачи GET запроса данные будут передаваться строкой запроса
// остаются в истории браузера
// кешируются
// имеют ограничения по размеру

if($method === 'GET'){
    $get = $_GET;
    var_dump($get);
    var_dump($get['name']); 
    var_dump($get['age']);
}

// POST ЗАПРОС:
// передаются в теле сообщения
// сохранятся и кешироватся они не будут
// собираются в сеперглобальном массиве $_POST
// ключами являются значения атрибутов name 

if($server['REQUEST_METHOD'] === 'POST'){
    $post = $_POST;
    var_dump($_POST);
    var_dump($post['pwd']);
}

?>

<p>
<!-- "goods.php?category=cats"" -->
    <a href="request_response.php">GET запрос без параметров</a> 
    <a href="request_response.php?name=qwe&age=30">GET запрос с параметрами</a>
</p>
<!-- по умолчанию данные формы передаются на указаный в action обработчик с методом get -->
<!-- для форм прописываем метод POST -->
<!-- атрибут name необходим для получения данных на сервере (не зависимо от метода передачи данных форм) -->
<form action="request_response.php" method="post">
<input  name="pwd" type="password" placeholder="Введите пароль">
<button type="sumbit">Отправить</button>
</form>

