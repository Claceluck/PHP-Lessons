<?php
require_once 'BattleUnit.php';

class Knight extends BattleUnit
{
    public function __construct(int $health, int $speed, $attack)
    {
        parent::__construct($health,$speed,$attack);
    }
    
    public function rest()
    {
        $this->health_score += 1;
        echo 'Отдых Knight';
    }
  
    public function attack(Unit $unit)
    {
        $unit->health_score -= $this->attack_score;
    }

    // переопределить метод родителя что бы расширеть фунционал
    public function runFromField()
    {
        // вызов метода родителя приведёт к уменьшению атаки и здоровья , при переопределение метода родителя можно не использовать его метод, а полностью описать собственный фунционал

        
        parent::runFromField();
        // расшираяем функционал родителя, уменьшая скорость
        $this->speed -= 1;
    }
}
// $knight = new Knight(23, 67, 22);
// 1. Будет вызван конструктор Knight
// 2. Будет вызван конструктор BattleUnit
// 3. Будет вызван конструктор Unit( пройдёт инициализация свойств здоровья и скорости)
// 4. в конструкторе BattleUnit произойдёт инициализация свойства атаки
// в итоге получим объект Knight