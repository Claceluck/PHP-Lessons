<?php 
var_dump('PDO');
// данные которые необходимы для соеденения с сервером
$server = 'localhost'; // ip сервера бд
// $port = 'port' если используеться не порт по умолчанию
$username = 'root'; // имя пользователя бд
$pwd = 'root'; // пароль использования бд
$db_name = 'lesson_mysql'; // названия бд, с которой собираетесь работать
// дополнительные опции для соеденения, будут распространяться на все запросы, использовать не обязательно
$options = [
  // отображать ошибки 
  PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
];

// создадим объект pdo (соеденение с бд)
$connection = new PDO("mysql:host=$server;dbname=$db_name",$username, $pwd);
var_dump($connection);

// sql запрос на создание таблиц
$sql = 'CREATE TABLE IF NOT EXISTS book(
  id INT PRIMARY KEY AUTO_INCREMENT,
  title VARCHAR(200) NOT NULL,
  page_count INT NOT NULL
);';

// exec - отправляет запрос на выполнение, вернёт колличество модифицированных строк
// если в запрос не (селект)передаются не какие данные и если запрос не предполагает возращение какого либо результата то передаём через метод exec

// можно использовать если в запросе не передаются данные от пользователя и это не select запрос 
$connection->exec($sql);

// данные пришли от пользователя из формы
$title = 'PHP 7.4';
$page_count = 700;

$sql = 'INSERT INTO book(title, page_count)
VALUES (:bookTitle, :pageCount)';
// title и page_count - имена столбцов в табдице
// :bookTitle, :pageCount - имена параметров в подготовленном запросе
// массив с параметрами 
$params = [
  // ключи параметров из запроса (:bookTitle, :pageCount)
  // значения то что мы ъотим в итоге передать вместо параметров
  'bookTitle' => $title,
  'pageCount' => $page_count
];
// prepare подготавливает запрос, возвращает объект
$statement = $connection->prepare($sql);
// отправляет запрос на выполнение с параметрами, возращает true, в случае успеха и false  в случае неудачи 
if ($statement->execute($params)){
  echo 'Данные успешно добавлены<br>';
}
// Когда передаём что нибудь от пользователя только через подготовленный запрос $statement = $connection->prepare($sql);

// объект PDO получаем, когда создаём соеденение
// PDO
//   exec(sql запрос) - если в запрос не переаются данные от пользователя и запрос не предполагает выборку(селект)

// // объект STATEMENT получаем, когда вызываем метод prepare объекта PDO
// // занимается подготовкой небезапасного запроса 
// // выполнение запроса
// STATEMENT
//   execute(параметры) - выполение запроса с параметрами

// query если не передаются данные от пользователя + селект

$sql = 'SELECT * FROM book';
$statement = $connection->query($sql);
// получчение данных
// PDO::FETCH_ASSOC - получение данных ввиди ассоативного массива 
$data = $statement->fetchAll(PDO::FETCH_ASSOC);
var_dump($data);

$id = 1;
$sql = 'SELECT * FROM book WHERE id = :idBook';
$params = [
  'idBook' => $id
];
$statement = $connection->prepare($sql);
// выполнение запроса
$statement->execute($params);
// получение данных (fetch для получение одной записи)
$data = $statement->fetch(PDO::FETCH_ASSOC);
var_dump($data);

// получить книги где количество страниц меньше 100

$pageCount = 400;
$sql = 'SELECT * FROM book WHERE page_count < :pageCount;';
$params = ['pageCount' => $pageCount];
$statement = $connection ->prepare($sql);
$statement->execute($params);
$data = $statement->fetchAll(PDO::FETCH_ASSOC);
var_dump($data);

// используем подготовленный запрос с неименованными параметрами 
$sql = 'SELECT * FROM book WHERE page_count < ? AND title = ?;';
$title = 'PHP';
$params = [$pageCount, $title];