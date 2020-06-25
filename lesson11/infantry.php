<?php
require_once 'BattleUnit.php';

class infantry extends BattleUnit
{
        public function __construct(int $health, int $speed, $attack)
    {
        parent::__construct($health,$speed,$attack);
    }
    
    public function rest()
    {
        $this->health_score += 3;
        echo 'Отдых infantry';
    }

    public function attack(Unit $unit)
    {
        $unit->health_score -= ($this->attack_score + 1);
    }

}