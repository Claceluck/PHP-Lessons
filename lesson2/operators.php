<?php

echo "Арифметические операторы <br>";
// + - * /

$int = 44;
$string = 'Строка';
$int_in_string = '2 em';

var_dump((int) $string); // 0
var_dump((int) $int_in_string); // 2

var_dump((int) true); // 1
var_dump((int) false); // 0

var_dump((int) null); // 0

var_dump((int) 56.77); // 56
var_dump((int) 56.17); // 56

$int = 44;
$float = 1.5;
$string = 'Строка';
$int_in_string = '2 em';

var_dump($int / 0); // float(INF)
var_dump($float / 0); // float(INF)

// Возведение в степень

var_dump($int ** 3);
var_dump($int ** $int_in_string);
var_dump($int ** $string);


var_dump($int . $string); // 44Строка
var_dump(44 . 55); // 4455

echo "Операторы сравнения <br>";
// в резултате работы возвращают true / false
// > < <= >= != !== == ===

// в результате работы возвращает 0 / -1 / 1
// <=> начиная с версии php 7.0 

$int = 44;
var_dump($int > 90); // false
var_dump($int == 44); // true
var_dump($int == '44'); // true
var_dump($int !== 44); // false
var_dump($int === '44'); // false

// <=>

var_dump($int <=> 90); // -1
var_dump($int <=> 30); // 1
var_dump($int <=> 44); // 0
var_dump($int <=> '44'); // 0

if (($int <=> '44') <= 0)  {}
if (($int <=> '44')) {} // if ((0 (false )))

echo "Операторы присваивания <br>";

// = / += / -= / *= / /= / %= / .= / **= 

$login = 'qwe';

$login = $login . 111; // $login .= 111;
var_dump($login);

echo "Инкремент ++ и декремент -- <br>";

$a = 5;
$a = $a++ - --$a;
var_dump($a);

echo "Домашняя работа <br>";

// ДЗ
// функции округления:
//  round();
// ceil();
// flour(); 

floor(10.9); // 10 округляет в меньшую сторону ( ближайшее меньше целое)
var_dump(floor(10.9));

ceil(10.9); // 11 округляет в большую сторону ( ближайшее большее целое)
var_dump(ceil(10.9));

var_dump(round(10.5 , 0, PHP_ROUND_HALF_UP)); // округление доступны доп переменные
var_dump(round(10.5, 0, PHP_ROUND_HALF_DOWN)); 

var_dump(round(200.333)); 

// PHP_ROUND_HALF_UP решает вопрос если следующий знак посередине (5) как и PHP_ROUND_HALF_DOWN