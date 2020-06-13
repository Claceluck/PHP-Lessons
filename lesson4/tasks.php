<?php

function getAllTasks(){

    $task1 = [
        'title'=>'Задача 1',
        'date'=>date_create('yesterday'),
        'participants'=>['Артур', 'Полина'],
        'closed'=>false
    ];

    $task2 = [
        'title'=>'Задача 2',
        'date'=>date_create('tomorrow'),
        'participants'=>[],
        'closed'=>false
    ];

    $task3 = [
        'title'=>'Задача 3',
        'date'=>date_create(),
        'participants'=>['Артур', 'Глеб'],
        'closed'=>false
    ];

    $task4 = [
        'title'=>'Задача 4',
        'date'=>date_create('yesterday'),
        'participants'=>['Павел', 'Полина'],
        'closed'=>true
    ];
    return [$task1, $task2, $task3, $task4];

}
// функция принимает на вход массив и функцию,
// возращает массив с элементами, которые
// прошли проверку переданной функции

function find_by_param(array $arr, callable $func) :array
{
    $filtered_arr = [];

    foreach ($arr as $value){
        if ($func($value)){
            // добавление элемента в массив
            array_push($filtered_arr, $value); // 1 вариант
            // $filtered_arr[] = $value; // 2 вариант
        }
    }

    return $filtered_arr;
}

$task1 = getAllTasks();

// 1. новые задачи. Дата задачи > date_create()
$new_task = function(){
    return $task['date'] > date_create();
};

// 2. невыполненные задачи: closed - false + дата задачи < date_create()

$non_closed_task = function(){
    return !$task['closed'] && $task['date'] < date_create();
};

// 3. закрытые задачи 
$closed_task = function(){
    return !$task['closed'];
};

// 4. задачи, где участник Артур
$arturOn = function(){
    return in_array('Артур', $task['participants']);
};

var_dump(find_by_param($tasks, $new_task));