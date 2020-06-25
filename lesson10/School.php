<?php

require_once 'Director.php';
require_once 'Pupil.php';
require_once 'Teacher.php';

class School
{
    // модификаторы доступа:
    // модификатор public означает, что мы можем обратиться
    // к свойству или методу из любого участка кода
    // модификатор private означает, что мы можем обратиться
    // к свойству или методу только в рамках текущего класса
    // модификатор protected означает, что мы можем обратиться
    // к свойству или методу в рамках текущего класса или
    // класса-наследника

    //название - задается при создании объекта
    //директор - задается при создании объекта
    //учителя[] - массив
    //ученики[] - массив

    private $schoolName;
    private $director;
    private $pupils = []; // максимум 10
    private $teachers = []; // максимум 3

    function __construct(string $schoolName, Director $director)
    {
        $this->schoolName = $schoolName;
        $this->director = $director;
    }

    // метод принимает на вход ссылку на объект ученика
    // и добавляет его в соответствующий массив

    // метод принимает на вход ссылку на объект учителя
    // и добавляет его в соответствующий массив
    public function addStudent(Pupil $student): bool
    {
        if (count($this->pupils) >= 10) { //>= 10 == 10 < 11
            return false;
        }
        // лучше использовать при добавлении нескольких элементов в массив
        //array_push($this->pupils, $student);
        // лучше использовать при добавлении одного элемента в массив
        $this->pupils[] = $student;
        return true;
    }

    public function addTeacher(Teacher $teacher): bool
    {
        if (count($this->teachers) >= 3) {
            return false;
        }
        // array_push($this->teachers, $teacher);
        $this->teachers[] = $teacher;
        return true;
    }

//день в школе() -
//1. директор объявляет начало занятий
//2. учителя учат учеников (предмет учителя и ученика должны совпадать)
//3. директор объявляет окончание занятий
    public function schoolDay()
    {
        $this->director->beginLesson();
        // учителя учат учеников
        //[учитель1, учитель2]
        //[ученик1, ученик2, ученик3]
        foreach ($this->teachers as $teacher) {
            foreach ($this->pupils as $pupil) {
                if ($teacher->getSubject() === $pupil->getSubject()) {
                    $teacher->teach($pupil);
                }
            }
        }

        $this->director->endLessons();
    }

    // метод возвращает массив со всеми учениками школы
    public function getPupils(){
        return $this->pupils;
    }
}