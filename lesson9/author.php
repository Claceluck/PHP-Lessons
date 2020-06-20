<?php

// на каждый класс создаём фал
// имя файла == имя класса с заглавной буквы
// например, в файле author.php находиться 
// класс Author

// Класс - набор свойств ( характеристик будущих объектов)
// и методов ( возможностей будущих объектов), имеющих объщюю, целостную, строго определённую сферу ответсвенности

class Author {
    // описание класса

    // перечесление характеристик, будущих объектов свойств, полей, атрибуты

    // у всех объектов, созданных на основе данного класса, будет имя ( значение имени у каждого автора будет своё)
    
    public $name;

    public $age;

}