<?php
//1.  отсортировать массив по price
//2.  разобрать функцию extract()
//3. + 7 любых функций для работы с массивами
//https://www.php.net/manual/ru/ref.array.php

//! extract — Импортирует переменные из массива в текущую таблицу символов

// array_count_values — Подсчитывает количество всех значений массива
//! array_key_exists — Проверяет, присутствует ли в массиве указанный ключ или индекс
// array_push — Добавляет один или несколько элементов в конец массива
//! array_unique — Убирает повторяющиеся значения из массива
//! array_pop — Извлекает последний элемент массива

//! sort — Сортирует массив

//! asort — Сортирует массив, сохраняя ключи
// ksort — Сортирует массив по ключам
// uasort — Сортирует массив, используя пользовательскую функцию для сравнения элементов с сохранением ключей
// uksort — Сортирует массив по ключам, используя пользовательскую функцию для сравнения ключей
//! usort — Сортирует массив по значениям используя пользовательскую функцию для сравнения элементов
//! shuffle — Перемешивает массив


$arr = [
    '1'=> [
        'price' => 10,
        'count' => 2
    ],
    '2'=> [
        'price' => 5,
        'count' => 5
    ],
    '3'=> [
        'price' => 8,
        'count' => 5
    ],
    '4'=> [
        'price' => 12,
        'count' => 4
    ],
    '5'=> [
        'price' => 8,
        'count' => 4
    ],
];

echo "Домашняя работа<br>";
echo "1. Отсортировать массив по price<br>";
var_dump($arr);

echo "sort <br>";

sort($arr);
var_dump($arr);

$arr = [
    '1'=> [
        'price' => 10,
        'count' => 2
    ],
    '2'=> [
        'price' => 5,
        'count' => 5
    ],
    '3'=> [
        'price' => 8,
        'count' => 5
    ],
    '4'=> [
        'price' => 12,
        'count' => 4
    ],
    '5'=> [
        'price' => 8,
        'count' => 4
    ],
];

echo "usort по убыванию<br> "; // как это работает???

usort($arr, function($a, $b){
    return ($b['price'] -$a['price']);
});
var_dump($arr);



echo "asort с сохранением ключей <br> ";

asort($arr);
var_dump($arr);

echo "arsort с сохранением ключей в обратном порядке <br>";

arsort($arr);
var_dump($arr);

echo "extract <br> непонятно";

var_dump(extract($arr));

// echo "array_count_values — Подсчитывает количество всех значений массива <br>";

// array_count_values($arr);
// var_dump($arr);

echo "array_key_exists — Проверяет, присутствует ли в массиве указанный ключ или индекс <br>";

if(array_key_exists(4 ,$arr)) {
    echo 'Массив содержит ключ под таким номером';
}
else {
    echo 'Такого ключа не существует';
}

echo "array_pop — Извлекает последний элемент массива <br>";

array_pop($arr);
var_dump($arr);

$arr = [
    '1'=> [
        'price' => 10,
        'count' => 2
    ],
    '2'=> [
        'price' => 5,
        'count' => 5
    ],
    '2'=> [
        'price' => 8,
        'count' => 5
    ],
    '2'=> [
        'price' => 12,
        'count' => 4
    ],
    '5'=> [
        'price' => 8,
        'count' => 4
    ],
];

echo "array_unique — Убирает повторяющиеся значения из массива <br>";

array_unique($arr);
var_dump($arr);

$arr = [
    '1'=> [
        'price' => 10,
        'count' => 2
    ],
    '2'=> [
        'price' => 5,
        'count' => 5
    ],
    '3'=> [
        'price' => 8,
        'count' => 5
    ],
    '4'=> [
        'price' => 12,
        'count' => 4
    ],
    '5'=> [
        'price' => 8,
        'count' => 4
    ],
];

echo " shuffle — Перемешивает массив <br>";

shuffle($arr);
var_dump($arr);