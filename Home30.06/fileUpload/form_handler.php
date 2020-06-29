<?php

$files = $_FILES;
var_dump($files);

$number_files = $files['picture']['name'];

for($i = 0; $i < $number_files; $i++) {

    $name = $files['picture']['name'][$i]; // имя файла
    $type = $files['picture']['type'][$i]; // тип файла
    $size = $files['picture']['size'][$i]; // размер файла 

    if (!type_check($name, $type)) break;
    if (!size_check($name, $size)) break;

    $file_name = gen_name($name);
    $tmp_name = $files['picture']['tmp_name'][$i];

    // файлы из move_uploaded_file
    // 5. переместить из временной папки в папку, где будут храниться файл
    if (move_uploaded_file($tmp_name, "img/$file_name")) {
        echo "$name успешно загружен<br>";
    } else {
        echo "$name не удалось загрузить<br>";
    }
}

// 1. Проверка на тип (type) 
function type_check($name,$type){
    if(strpos($type, 'image/jpeg') === false){ // всё равботает, но непонятно почему каждый раз выдаёт echo "$name Не верный тип файла<br>" в кнонце
        echo "$name Не верный тип файла<br>";
        return false;
    }
    return true;
}

// 2. проверка на размер (size)
function size_check($name,$size){
    if($size>2097152){
        echo "$name Размер файла больше 2мб<br>";
        return false;
    }
    return true;
}

// 4. изменить имя (name) файла
function gen_name($name){
    // 3. получить расширение файла ($ext = pathinfo($file_name, PATHINFO_EXTENSION);)
    $ext = pathinfo($name, PATHINFO_EXTENSION);
    $name=md5($name.microtime().rand(0,999));
    return $name.'.'.$ext;
}







