<?php
echo "Логические операторы:
        && and - и |
        || or - или
        ! - не
        xor - исключающее или.";

// приоритет операторов && || больше,
// чем and or

$bool = false || true; // true
var_dump($bool);

$bool = false or true; // false 
var_dump($bool);

$bool = (false or true); // true
var_dump($bool);

$a = 45;
$b = 45;

var_dump($a === 45 xor $b === 45); // false
var_dump($a === 45 || $b === 45); // true
var_dump($a === 45 xor $b === 66); // true
// xor - один из операндов true но не оба

// тернарный оператор 
// результат = условие ? значение 1 : значение 2 ;


$a = 23;
$b = 45;
$c = 12;
$res = null;
// вывести в var_dump: находиться ли число $c в диапозоне между $a и $b

$res = $c > $a && $c < $b ? 'Да' : 'Нет' ;
var_dump($res);

//
$login; // 'Гость'
$login = isset($login) ? $login : 'Гость';
var_dump($login);
// начиная с версии 7.0 ?? оператор объеденения с null

$login = $login ?? 'Гость'; // если есть значение присвоеенное то возращает перменную, если не присвоенно то возращает значение по умолчанию 
var_dump($login);

// if else

$mount = 4;
$summer = 'Лето';
$winter = 'Зима';
$fall = 'Осень';
$spring ='Вестна';
$season;

// if($mount > 3 || $mount = 12){var_dump($winter);} 
// else if ($mount >= 3 || $mount < 7) {var_dump($spring);}
// else if ($mount >=7 || $mount < 9) {var_dump($summer);}
// else {var_dump($fall);};

// зима
// весна
// лето
// осень
if ($month === 1 || 2 || 12) { var_dump('Zima'); } 
else if ($month === 3 || 4 || 5) { var_dump('Vesna'); } 
else if ($month === 6 || 7 || 8) { var_dump('Leto'); } 
else if ($month === 0) { var_dump('Vvedi Nomalno'); } 
else if ($month > 12) var_dump('VVedi normalno'); 
else if ($month < 0) var_dump('VVedi normalno'); 
else var_dump('Osen');

// не забываем про проверки!!! 


// switch


// switch ( переменная / выражение) {
//     case 'case1'
//     case 'case2':
//         code;
//         break;
// }

$num = '№3341';

switch ($num) {
    case '№29':
        var_dump('Автобус 29, протяжённость 12');
    break;
    case '№34':
        var_dump('Троллебус 34, протяжённость 6');
    break;
    case '№56':
        var_dump('Троллебус 56, протяжённость 6');
    break;
    case '№2':
        var_dump('Трамвай 2, протяжённость 18');
    break;
    case '№26':
        var_dump('Трамвай 26, протяжённость 12');
    break;
    case '№31':
        var_dump('Троллебус 31, протяжённость 17');
    break;
    default:
        var_dump('Данного транспортного средства не существует');
    break;
}

// АЛЬТЕРНАТИВНЫЙ СИНТАКСИС
// альтернативный синтаксис if else принято использовать когда php выступает как шаблонизатор

/*
if(условие):
    code;
    elseif(условие2):
        code;
    else:
        code;
    endif;
*/
$auth = true;
$login = 'Claceluck';

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<?php if($auth): ?>

    <h2>Welcome, <?php echo $login; ?> </h2>
    <a href="#">Выйти из личного кабинета</a>

<?php else: ?>

    <h2>Welcome, Guest</h2>
    <a href="#">Войти в личный кабинет</a>

<?php endif; ?>

</body>
</html>

<!-- Используеться в скриптах -->
<?php echo 'info' ?>

<!-- используеться в HTML -->
<? echo 'info#2 '?> 

<!-- Так делать лучше не надо! -->
<!-- = в место echo -->
<?="инфо333" ?>
