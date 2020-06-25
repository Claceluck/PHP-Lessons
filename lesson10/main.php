<?php
require_once 'School.php';
//

$pupil_one = new Pupil();
$pupil_one->setName('Первый ученик');
$pupil_one->setAge(12);
$pupil_one->setSubject('химия');

$pupil_two = new Pupil();
// вызов методов возможен благодаря наследованию
// и модификатору public
$pupil_two->setName('Второй ученик');
$pupil_two->setAge(7);
$pupil_two->setSubject('математика');

$teacher_one = new Teacher();
$teacher_one->setName('Марина Леонидовна');
$teacher_one->setAge(32);
$teacher_one->setSubject('математика');

$director = new Director();
$director->setName('Александр Сергеевич');
$director->setAge(56);

$school = new School('Школа №12', $director);
$school->addStudent($pupil_one);
$school->addStudent($pupil_two);
$school->addTeacher($teacher_one);
$school->schoolDay();
// вывести уровень знаний всех учеников школы:
$pupils = $school->getPupils();
foreach ($pupils as $pupil) {
    var_dump($pupil->getName() . ': ' .
        $pupil->getLevel());
}

var_dump($school);