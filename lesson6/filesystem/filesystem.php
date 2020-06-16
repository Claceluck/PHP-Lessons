<?php

$filename = 'file.txt';


// запись строки в файл (файл создаётся)

if(file_put_contents($filename, 'данные для записи', FILE_APPEND | LOCK_EX) !== false){
    echo'Данные успешно записаны в файл;';
} // функция принимает на вход ( имя файла, что записываем, необязательные константы)
// FILE_APPEND (дозапись в файл, что бы не стиралось всё содержимое файла)  
// LOCK_EX ( закрытие файла на время записи)
// в случае если запись не произошла функция вернёт false
// если функция может вернуть 0 в случае успеха и false в случае ошибки , необходимо использовть строгие неравнества === или !==



// чтение строки из файла

$data = file_get_contents($filename);

// в случае если чтение не произошло функция вернёт false
var_dump($data);


$filename_two = 'file2.txt';
if(file_put_contents($filename_two, 'Данные для записи 2' . PHP_EOL, FILE_APPEND | LOCK_EX) !== false){
    echo'Данные успешно записаны в файл;';
}

//PHP_EOL - конец строки можно заменить на \n или \r\n


// чтение из файла в массив ( каждая строка - элемент массива)

$arr_data = file($filename_two, FILE_INORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
var_dump($arr_data);

// FILE_SKIP_EMPTY_LINES - что бы пустые строки не входили в массив
// FILE_INORE_NEW_LINES что бы игнорировался перенос строки 

// если данные записываются в одну строку, то для чтения потребуется функция file_get_contents
// если данные каждый раз записываются с новой строчеи, то для чтения подойдёт функция file()


// копирование из одного файла в другой
// copy(откуда, куда);
// если файл "куда" не существует, он будет создан
if(copy($filename, 'copy_file.txt')) {
    echo 'Копирование прошло успешно<br>';
}

// переименование
// rename(старое_имя, новое_имя);
if (rename('copy_file.txt', 'new_file.txt')){
    echo 'Переименование прошло успешно<br>';
}

// удаление файла ( не директории)
if(unlink('delFail.txt')) {
    echo 'Удаление прошло успешно<br>';
}

// создани директории 
mkdir('new_dir');

// удаление директории ( директория должна быть пустой)
rmdir('some_dir');


// написать функцию на удаление непустого католога
// unlink
// rmdir
// is_dir проверка на директорию, возвращает true если это директория
// opendir


// function delete (имя_директории)
// dir delite (:dir)
//     file1 // файлы удаляем
//     file1
//     dir2  delite (:dir)// проверка на директорию ( вызываем туже самую функцию и удаляме все файлы)
//         file1
//         file2
//         dir




// php - dir // открыть stream ( поток) 
// is_dir
function read_dir($dirname) {
    if (is_dir($dirname)) {
        if ($dh = opendir($dirname)) {
            // $dh (соеденение сохранённое в перменную )специальны тип данных - дескриптор ресурсов
            var_dump($dh);
            while (($data = readdir($dh)) !== false) {// открытие дириктории 
                echo 'data ' . $data . ' type ' . filetype($dirname . '/' . $data) . "<br>";
            }
            closedir($dh); // закрытие директории
        }
    }
}

// file_get_contents - послдовательный вызов функций:
// fopen - открытие файла (в режиме записи)
// flock - блкировка, если указан флаг LOCK_EX
// fwrite - запись в файл
// fclouse - закрытие файла

// отдельные фунции смотрим исключитетльно под задачи

// file_put_contents  - послдовательный вызов функций:
// fopen - открытие файла (в режиме чтения)
// fread - чтения из файла
// fclouse -закрытие файла 


function write_file($filename, $data){
    $fp = fopen($filename, 'a');
    fwrite($fp, $data);
    fclose($fp);
}


function read_file_fread($filename){
    $fp = fopen($filename, 'r');
    //$content = fread($fp, filesize($filename));

    $content = null;
    while (!feof($fp)) {
        $content .= fread($fp, 1024);
    }
    fclose($fp);
    return $content;
}


