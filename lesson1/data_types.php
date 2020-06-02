<?php
var_dump("Helloy");

// однострочный коментарий cntr + /
# однострочный коментарий

/*
 многострочный  cntr + shift + /
 коментарий 
*/

// все инструкции нужно разделять ; 

echo "Вывод информации<br>";

var_dump("Отладка");


// объявление переменных
// принято сразу присваивать значения переменным, хотя бы null, что бы что то в ней было
$login = 'qwe';
var_dump($login);

// все переменные объявляються с помощью $ и при обращение $ не куда не исчезает

// переропределение значения переменной
$login = 'asd';
var_dump($login);

// var_dump($login); не объявленная переменная выведет NULL

// empty(переменная) / isset(переменая)

var_dump('empty $login', empty($login)); // false
var_dump('isset $login', isset($login)); // true

// empty - true, если переменная пуста
// empty - проверяет, являеться ли переменная пустой 
// (переменная не существует, если её значение null или false)

// isset - true, если переменной установленно значение
// установленно и не равно null

$pwd = null; // false 0 '' '0'

var_dump('empty $pwd', empty($pwd));
var_dump('isset $pwd', isset($pwd));

// empty:  
// false - true
//  0 - true
// '' -true
// '0' - true
// null - true

// isset: 
// false - true
//  0 - true
// '' - true
// '0' - true
// null - false 

unset($login); // объявляет переменную как будто бы её и не было ( удаление переменной)

// Типы данных:

/* 1 Скалярные типы данных:
boolean (true - false)
integer (целые числа)
float / double /real (числа с плавующей точкой)
string (строки всегда в кавычках!!!: в '' / "") */

/* 2 Смешанные типы данных:
array ( массивы)
object (объекты созданные на основе заранее описанных классов)
callable 
iterable
 */
/* 3 Специальные типы данных: 
resource (дескриптор ресурсов) 
NULL */

// Скалярные типы данных:
echo 'Тип boolean<br>';
// выражает истину или ложь, принимает значения true или false

$active = false;
$connected = true;

// приведение к типу boolean 
$login = (bool) $login;

// при приведние к булевуму типу к false преобразуется: 
// 0 / -0 / 0.0 / '' / '0'/ null / пустой массив 

// проверка на тип boolean
var_dump(is_bool($login));

echo "Тип Inreger <br>";

// целые числа 
var_dump(PHP_INT_MIN);
var_dump(PHP_INT_MAX);

// приведение к integer ( int) / (integer)
$login = (int) $login;

// проверка на integer
var_dump(is_integer($login));

echo "Тип float / double / real <br>";
// числа с плавующей точкой 
$double_var = 56.89;

// приведение к  числа с плавующей точкой  
// (float) / (double) / (real)
$login = (float) $login;

var_dump(is_double($login));
var_dump(is_float($login));
// var_dump(is_real($login)); устаревшее


echo "Тип String <br>";
// набор символов. Строки в php неизменны 

$first_string = 'Строка отображает все символы, как есть $login <br>';
$second_string = "Интерпритатор обрабатывает специальные символы  <br> и распознает переменные $login";

var_dump($first_string);
var_dump($second_string);

// приведение к типу string
$login = (string) $login;

// проверка на тип string
var_dump(is_string($login));

// gettype() возвращает тип данных переменной 
// не пользуемся в проетах ( не полагаемся на неё)
// пользуемся is_bool 
// if(is_bool($some_data)) {}
$some_data = true;
$res = gettype($some_data);
var_dump($res);
