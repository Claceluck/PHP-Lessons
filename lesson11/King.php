<?php
require_once 'Unit.php';

class King extends Unit
{
    private static $king_obj;
    private $gold = 500;


    // private конструктор не позволит создавать объект  KING вне класса
    private function __construct(int $health, int $speed)
    {
        parent::__construct($health, $speed);
    }

    public static function getKingObj(){
        // self:: используеться для обращения к статическим переменным внутри класса
        if(self::$king_obj === null){
        self::$king_obj = new King(rand(10, 100), rand(15, 60));
        }
        return self::$king_obj;
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

    public function rest()
    {
        $this->removeGold(5);
        $this->health_score += 5;
        echo 'King отдых';
    }
}