<?php
// Human.php
//
class Human
{

    protected $name;
    protected $age;

    // методы, которые позволят установить
    // значение имени и возраста

    // метод, который устанавливает значение свойства name
    public function setName(string $name)
    {
        $this->name = $name;
    }

    // метод, который устанавливает значение свойства age
    public function setAge(int $age)
    {
        $this->age = $age;
    }

    // метод, который возвращает значение свойства name
    public function getName()//:string
    {
        return $this->name;
    }
    // метод, который возвращает значение свойства age
    public function getAge()//:int
    {
        return $this->age;
    }
}

