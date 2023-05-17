<?php 
class Student{
    private $id;
    private $name;
    private $age;
    private $gender;

    // public function __construct($id,$name,$age,$gender){
    //     $this->id=$id;
    //     $this->name=$name;
    //     $this->age=$age;
    //     $this->gender=$gender;
    // }
    //setter
    public function setID($id){
        $this->id=$id;
    }
    public function setName($name){
        $this->name=$name;
    }
    public function setAge($age){
        $this->age=$age;
    }
    public function setGender($gender){
        $this->gender=$gender;
    }
    //getter
    public function getID(){
        return $this->id;
    }
    public function getName(){
        return $this->name;
    }
    public function getAge(){
        return $this->age;
    }
    public function getGender(){
        return $this->gender;
    }
}
class Teacher{
    private $id;
    private $name;
    private $age;
    private $gender;
    
    // public function __construct($id,$name,$age,$gender){
    //     $this->id=$id;
    //     $this->name=$name;
    //     $this->age=$age;
    //     $this->gender=$gender;
    // }
    //setter
    public function setID($id){
        $this->id=$id;
    }
    public function setName($name){
        $this->name=$name;
    }
    public function setAge($age){
        $this->age=$age;
    }
    public function setGender($gender){
        $this->gender=$gender;
    }
    //getter
    public function getID(){
        return $this->id;
    }
    public function getName(){
        return $this->name;
    }
    public function getAge(){
        return $this->age;
    }
    public function getGender(){
        return $this->gender;
    }
}
class Course{
    private $name;
    private $teacher;
    private $students;

    public function __construct($name,$teacher,$students){
        $this->name=$name;
        $this->teacher=$teacher;
        $this->students=$students;
    }

    public function getName(){
        return $this->name;
    }
    public function setName($name){
        $this->name=$name;
    }
    // public function setTeacher($teacher){
    //     $this->teacher=$teacher;
    // }
    public function getTeacher(): Teacher{
        return $this->teacher;
    }
    // public function setStudents($students){
    //     $this->students=$students;
    // }
    public function getStudents(): array{
        return $this->students;
    }
}

//inheritance 
class Person {
    private $id;
    private $name;
    private $age;
    private $gender;

    // public function __construct($id,$name,$age,$gender){
    //     $this->id=$id;
    //     $this->name=$name;
    //     $this->age=$age;
    //     $this->gender=$gender;
    // }
    //setter
    public function setID($id){
        $this->id=$id;
    }
    public function setName($name){
        $this->name=$name;
    }
    public function setAge($age){
        $this->age=$age;
    }
    public function setGender($gender){
        $this->gender=$gender;
    }
    //getter
    public function getID(){
        return $this->id;
    }
    public function getName(){
        return $this->name;
    }
    public function getAge(){
        return $this->age;
    }
    public function getGender(){
        return $this->gender;
    }
}
class StudentA extends Person{

}
class TeacherA extends Person{
    
}






$teacher =new Teacher;
$teacher->setID(1);
$teacher->setName('Nguyen Thi Lu');
$teacher->setAge(35);
$teacher->setGender('Male');

$student1= new Student;
$student1->setID(1);
$student1->setName('Lot cai tum');
$student1->setAge(15);
$student1->setGender('Male'); 

$student2= new Student;
$student2->setID(2);
$student2->setName('Te cai dung');
$student2->setAge(17);
$student2->setGender('Male');

$student3= new Student;
$student3->setID(3);
$student3->setName('Te cai dui');
$student3->setAge(16);
$student3->setGender('female');

$listStudent= [];
$listStudent[]=$student1;
$listStudent[]=$student2;
$listStudent[]=$student3;

$course = new Course ('Fullstalk',$teacher,$listStudent);
// $course= new Course;
// $course->setStudents([$student1,$student2,$student3]);
echo 'Course : '.$course->getName().'<br>';

echo "Teacher ID :".$course->getTeacher()->getID().'<br>';
echo "Teacher Name :".$course->getTeacher()->getName().'<br>';
echo "Teacher Age :".$course->getTeacher()->getAge().'<br>';
echo "Teacher Gender :".$course->getTeacher()->getGender().'<br>'; 

foreach($course->getStudents() as $student){
    echo "Student ID :".$student->getID().'<br>';
    echo "Student Name :".$student->getName().'<br>';
    echo "Student Age :".$student->getAge().'<br>';
    echo "Student Gender :".$student->getGender().'<br>'; 
}
?>