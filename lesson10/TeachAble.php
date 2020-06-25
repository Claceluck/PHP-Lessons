<?php

// TeachAble.php
require_once 'LearnAble.php';
interface TeachAble
{
    // метод сможет принять на вход только объект типа
    // Pupil и всех его наследников
    // public function teach(Pupil $pupil);

    // метод сможет принять на вход только объект типа
    // Human и всех его наследников
    // public function teach(Human $pupil);

    // все объекты, которые способны учиться, те объекты
    // классы которых реализуют интерфейс LearnAble
    public function teach(LearnAble $learnAble);
}