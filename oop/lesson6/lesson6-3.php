<?php
// Сделайте класс Student со свойствами $name и $course (курс студента, от 1-го до 5-го).
// В классе Student сделайте public метод transferToNextCourse, который будет переводить студента на следующий курс.
// Выполните в методе transferToNextCourse проверку на то, что следующий курс не больше 5.
// Вынесите проверку курса в отдельный private метод isCourseCorrect.
class Student
{
    public $name;
    public $course;

    public function transferToNextCourse($course)
    {
        if($this->course+1>5){
            return false;
        }
        else{
            return $this->course + 1;
        }
    }

    private function isCourseCorrect()
    {
        if ($this->course + 1 > 5) {
            return false;
        }
    }
}

$student1 = new Student;
$student1->course = 4;
echo $student1->transferToNextCourse(1);
