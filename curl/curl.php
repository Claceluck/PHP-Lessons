<?php
//curl.php
// https://jsonplaceholder.typicode.com/

// curl
// GET
// инициализация сесии
$curl =
  curl_init('https://jsonplaceholder.typicode.com/users');
// настройки сессии
//https://www.php.net/manual/ru/function.curl-setopt.php
curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);

// отправка запроса
$data = curl_exec($curl);

var_dump(json_decode($data));

// закрываем сессию
curl_close($curl);

$curl =
    curl_init('http://profi.ifmo.ru/');
curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
$data = curl_exec($curl);
var_dump($data);
curl_close($curl);

//https://jsonplaceholder.typicode.com/comments
//?id=1&param2=value
$params = [
    'id' => 1
    // + остальные параметры
]; // http_build_query($params) => id=1&param2=value
$url = 'https://jsonplaceholder.typicode.com/comments';
$url = $url . '?' . http_build_query($params);

$curl = curl_init($url);
curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
$data = curl_exec($curl);
var_dump($data);
curl_close($curl);


// POST

$params = [
  'title' => 'Article'
];
$options = [
  CURLOPT_URL => 'https://jsonplaceholder.typicode.com/posts',
  CURLOPT_POST => true,
  CURLOPT_POSTFIELDS => $params,
  CURLOPT_RETURNTRANSFER => true
];
$curl = curl_init();
// настройки сессии
curl_setopt_array($curl, $options);
$data = curl_exec($curl);
var_dump($data);
curl_close($curl);