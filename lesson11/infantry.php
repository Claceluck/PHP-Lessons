<?php
require_once 'BattleUnit.php';

class infantry extends BattleUnit
{
        public function __construct(int $health, int $speed, $attack)
    {
        parent::__construct($health,$speed,$attack);
    }
    


}