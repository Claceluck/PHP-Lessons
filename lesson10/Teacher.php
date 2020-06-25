<?php
// Teacher.php
// класс Teacher настледуется от класса SubjectHuman, ему передаются
// свойства $name, $age + методы, которые устанавливают значения
// данных свойств
require_once 'SubjectHuman.php';
require_once 'TeachAble.php';
class Teacher extends SubjectHuman implements TeachAble
{

    public function teach(LearnAble $learnAble)
    {
        $learnAble->learn();
    }
}
/*SubjectHuman extends Human
    name
    age
Teacher extends SubjectHuman
    name
    age
    subject
Pupil extends SubjectHuman
    name
    age
    subject*/

/*может_быть_съеден
может_съесть

кот -> может_съесть, может_быть_съеден
мышь -> может_быть_съеден
волк -> может_съесть*/

