<?php

class Article
{
    public $author;
    public $title;
    public $text;


    // конструктор должен иметь возможность
    //  принять на вход автора, название стаьи 
    // переопределили конструктор который сузествует по умолчанию ( без параметров )
    // теперь наш конструктор принимает на вход переменную значения типа Author и переменную значения типа string
public function __constuct(Author $author,string $title)
{
// $this ссылка на текущий объект 
// для создаваемого объекта значение свойства author
// будет равно значание переменной $author
$this->author = $author;
// будет равно значание переменной $title
$this->title = $title;
// будет равно значание переменной $author
$this->date = new DateTime();
}

}