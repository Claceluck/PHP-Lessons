<?php
$post = $_POST;
var_dump($post);

// данные о загружаемых файлах в массив $_FILES
$files = $_FILES;
var_dump($files);

// название файла в мульте загрузке
// $file_name = $files['picture']['name'][0]; // загрузка первого файла 
// $file_name = $files['picture']['name'][1]; // загрузка второго файла 


// загрузка одного файла 
// название файла
$file_name = $files['picture']['name'];
var_dump($file_name);
// где picture - значение атрибута name
// <input type = "file" name = "picture">

// тип файла
$type = $files['picture']['type'];

// расширение файла
$ext = pathinfo($file_name, PATHINFO_EXTENSION);
var_dump($ext);

// изменение имени файла
// md5 - возвращает кэш строки
$name = md5($file_name . microtime() . rand(0, 999));
var_dump($name); // 42961ecf5d92b29b0e1738b04e3154ce

// имя файла с расширением
$name.= ".$ext"; // 42961ecf5d92b29b0e1738b04e3154ce
var_dump($name);

// перемещение из временной папки
// move_uploader_file ( временная_папка, куда_перемещаем)
$tmp_name = $files['picture']['tmp_name'];
if(move_uploaded_file($tmp_name, "img/$name")){
    echo 'Файл успешно загружен';
} else {
    echo 'Файл загрузить не удалось';
}

// файл во временной папке
// информация по файлу в массиве $_FILES

// 1. Проверка на тип (type)
// 2. проверка на размер (size)
// 3. получить расширение файла ($ext = pathinfo($file_name, PATHINFO_EXTENSION);)
// 4. изменить имя (name) файла
// 5. переместить из временной папки в папку, где будут храниться файл
// файлы из move_uploaded_file