<?php 
//inherit
//inheritance 
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
}
class Cat extends Animal {
    //color
    public $color; 
    //override

    public function makeSound(){
        //parent::makeSound();
        echo 'Meoz Meoz';
    }
}
class Dog extends Animal{
    public $mouth;
    public function makeSound(){
        echo 'Gau Gau';
    }
}

$cat= new Cat;
$cat->color='red';

$cat->setName('Meo con');
$cat->setAge(10);
$cat->setGender('male'); 
$cat->makeSound();
echo "Cat :".$cat->getName()."- Age :".$cat->getAge()."- Gender:".$cat->getGender().'<br>';
$dog= new Dog;
$dog->setName('Cho con');
$dog->setAge(10);
$dog->setGender('male'); 
$dog->makeSound();
echo "Dog :".$dog->getName()."- Age :".$dog->getAge()."- Gender:".$dog->getGender();
?>