<?php
require_once 'Unit.php';

class King extends Unit
{
    private $gold = 500;

    public function __construct(int $health, int $speed)
    {
        parent::__construct($health, $speed);
    }

    public function addGold(int $gold){
        $this->gold = $this->gold + $gold;
    }

    public function removeGold(int $gold){
        $this->gold = $this->gold - $gold;
    }

    public function getGold()
    {
        return $this->gold;
    }
}