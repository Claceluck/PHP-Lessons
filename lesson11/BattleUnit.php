<?php

require_once 'Unit.php';

// класс BattleUnit наследуеться от класса Гnit, те класс BattleUnit расширяет класс Unit
class BattleUnit extends Unit
{
    protected $attack_score;

    public function __construct(int $health, int $speed, int $attack)
    {
        // parent:: обращение к родителю (в данном случае вызов конструктора родителя, в котором происходит инициализация свойств health_score и speed)
        parent::__construct($health, $speed);
        $this->setAttackScore($attack);
    }
        // конструктор дочернего класса не обязан принмать на вход агрументы как у родителя
    public function setAttackScore(int $attack){
        $this->attack_score = $attack;
    }

    public function getAttack_score()
    {
        return $this->attack_score;
    }
    //  statick можно вызвать метод без создания объекта
    public static function getBattleUnit($unit_type){
    
    // knight
    // первую букву приводит к верхему регситру 
    $unit_name = ucfirst($unit_type); // Knight
    $file_name = $unit_name . '.php'; // Knight.php
    require_once $file_name; // require_once Knight.php
    
    // return new Knight(rand(1, 30), rand(1, 10), rand(1, 40));
    return new $unit_name(rand(1, 30), rand(1, 10), rand(1, 40));
    }

    // вызов статик метода без создания объекта
    // имяКласса::имяМетода();
    // $unit = BattleUnit::getBattleUnit('knight');
}

