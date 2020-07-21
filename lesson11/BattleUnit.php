<?php

require_once 'Unit.php';

// класс BattleUnit наследуеться от класса Unit, те класс BattleUnit расширяет класс Unit
// BattleUnit - передал обязанность реализовать метод rest
abstract class BattleUnit extends Unit implements BattleAble
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

// реализуем метод интерфейса BattleAble, реализацию метода по наследству получат все потомки данного класса + получат возможность не писать своих реализаций данного метода

// метод attack() интерфейса  BattleAble  не будет реализован в данном классе, соответсвенно все потомки данного класса будут обязаны реализвать данный метод( или объявленны абстрактно)

public function runFromField()
{
    // $this->setAttackScore($this->attack_score -= 1); обращение через сеттер 
    $this->health_score -= 2;
    $this->attack_score -= 1;

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

