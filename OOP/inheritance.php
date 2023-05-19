<?php 
//inherit
//inheritance 
interface canSwim{
    //all method - abtract public function
    public function canSwim();
}
interface canRun{
    public function canRun();
}
interface canFly{
    public function canFly();
}
abstract class Animal{
        //attribute 
        private $name;
        private $age;
        private $gender;
    
        public function setName($name){
             $this->name=$name;
        }
        public function setAge($age){
            if($age >=0){
                $this->age=$age;
            }else{
                throw new \Exception('Age is invalid!');
            }
        }
        public function setGender($gender){
            if(in_array($gender,['female','male'])){
                $this->gender=$gender;
            }else {
                throw new \Exception('Gender is invalid!');
            }
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
        abstract public function makeSound();
        // public function makeSound(){
        //     //magic constants
        //     echo __METHOD__;
        //     //parent::makeSound();
        //     echo 'make sound from parent';
        // }
        final public function eat(){
            echo 'an';
            echo __METHOD__;
        }
}
//abstract : tinh tru tuong 
//extends : tinh ke thua 
//implememt goi cac thuoc tinh rieng cua class con de khong phai lap lai cac function
final class Cat extends Animal implements canRun,canSwim{
    //color
    public $color; 
    //override

    public function makeSound(){
        //magic constants
        echo __METHOD__;
        //parent::makeSound();
        // echo 'Meoz Meoz';
    }
    // public function eat(){
    //     echo 'ngu';
    //     echo __METHOD__;
    // }
    public function canRun(){
        echo 'biet chay';
    }
    public function canSwim(){
        echo 'biet boi';
    }
}
//final 
//class final kh cho extends lai cai class do 
//method final kh cho overide cai method do 
//abstract khong dung chung voi final  
// class CatChilds extends Cat{

// }
class Dog extends Animal implements canRun,canSwim{
    public $mouth;
    public function makeSound(){
        echo 'Gau Gau';
    }
    public function canRun(){
        echo 'biet chay';
    }
    public function canSwim(){
        echo 'biet boi';
    }
}
class Bird extends Animal implements canFly{
    public function makeSound(){
        echo 'Chip Chip';
    }
    public function canFly(){
        echo 'biet bay';
    }
}

$cat= new Cat;
$cat->color='red';

$cat->setName('Meo con');
$cat->setAge(10);
$cat->setGender('male'); 
$cat->makeSound();
$cat->eat();
echo "Cat :".$cat->getName()."- Age :".$cat->getAge()."- Gender:".$cat->getGender().'<br>';

$catB= new Cat;
$catB->setName('Meo con B'.'<br>');
echo $catB->getName(); 
//clone tao vung nho khac cho doi tuong C va giu nguyen vung nho cua B 
$catC= clone $catB;
$catC->setName('Meo con C'.'<br>');
echo $catC->getName();

echo $catB->getName();

$dog= new Dog;
$dog->setName('Cho con');
$dog->setAge(10);
$dog->setGender('male'); 
$dog->makeSound();
$cat->eat();
echo "Dog :".$dog->getName()."- Age :".$dog->getAge()."- Gender:".$dog->getGender();
?>