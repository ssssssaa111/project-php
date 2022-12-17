<?php
// Не подсматривая в мой код реализуйте такой же класс Student.
// Модифицируйте метод transferToNextCourse так, чтобы при переводе на новый курс выполнялась проверка того, что новый курс не будет больше 5.
class Student
{
    private $name;
    private $course;
    public function __construct($name)
    {
        $this->name=$name;
        $this->course=5;
    }
    public function getName()
    {
        return $this->name;
    }
    public function getCourse()
    {
        return $this->course;
    }
    public function transferToNextCourse()
    {
        if($this->course>4)
        {
            return false;
        }
        else
        {
            $this->course++;
        }
    }
}
$student=new Student('maxim');
echo $student->getCourse() . '<br>';
echo $student->getName() . '<br>';
$student->transferToNextCourse();
echo $student->getCourse();
