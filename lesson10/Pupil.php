<?php
// Pupil.php
//создается со следующими характеристиками:
//имя+ возраст+ благодаря наследованию от Human
//изучаемый предмет
//уровень знаний
require_once 'SubjectHuman.php';
require_once 'LearnAble.php';
// класс Pupil наследуется от класса SubjectHuman и реализует
// интерфейс LearnAble
class Pupil extends SubjectHuman implements LearnAble {
    // все объекты данного класса будут создаваться со значением
    // свойства level равному 1
    private $level = 1; // уровень знаний

    // метод, который возвращает уровень знаний
    public function getLevel(){
        return $this->level;
    }

    // реализация метода learn интерфейса LearnAble
    public function learn()
    {
        $this->level++;
    }
}