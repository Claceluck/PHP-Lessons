<?php

class Unit 
{
    // доступ к свойствам доступен внутри данного класса и всех его классов аследников 
    // $this->health_score

    // Использование модификаторов
    // для свойств лучше указывать модификатор private  + сет и гет методы с модификатором public

    // если свойства используются внутри дочерних классов, то можно использовать модификатор protected для вспомогательных методов, которые испоьзуются 

    // для вспомогательных мметодов, которые испоользуются только внутри класса модификатор private для остальных методов public

    protected $health_score;
    protected $speed;

    public function __construct(int $health, int $speed)
    {
        // если в сет методах реализована валидация входящих данных, то в конструкторе лучше использовать эти методы
        $this->setHealthScore($health);
        $this->setSpeed($speed);
    }

    public function setHealthScore(int $health_score)
    {
        $this->health_score = $health_score;
    }


    public function getetHealthScore()
    {
        return $this->health_score;
    }


    public function setSpeed(int $speed)
    {
        $this->speed = $speed;
    }


    public function getSpeed()
    {
        return $this->speed;
    }



    public function isAlive(){
        return $this->health_score > 0;
    }

    public function run(){
        echo "персонаж перемещается со скоростью $this->speed";
    }

   
}
