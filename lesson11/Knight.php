<?php
require_once 'BattleUnit.php';

class Knight extends BattleUnit
{
    public function __construct(int $health, int $speed, $attack)
    {
        parent::__construct($health,$speed,$attack);
    }


}
// $knight = new Knight(23, 67, 22);
// 1. Будет вызван конструктор Knight
// 2. Будет вызван конструктор BattleUnit
// 3. Будет вызван конструктор Unit( пройдёт инициализация свойств здоровья и скорости)
// 4. в конструкторе BattleUnit произойдёт инициализация свойства атаки
// в итоге получим объект Knight