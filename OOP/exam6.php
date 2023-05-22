<?php 
    abstract class Shape{
        abstract public function getArea();
    }
    class Retangle extends Shape{
        private $width;
        private $height;
        public function __construct($width,$height){
            $this->width=$width;
            $this->height=$height;
        }
        public function getArea(){
            return $this->width * $this->height;
        }
    }
    class Circle extends Shape{
        private $radius;
        public function __construct($radius){
            $this->radius=$radius;
        }
        public function getArea(){
            return pi()*pow($this->radius,2);
        }
    }
    class Triangle extends Shape{
        private $base;
        private $height;
        public function __construct($base,$height){
            $this->base=$base;
            $this->height=$height;
        }
        public function getArea(){
            return 0.5*$this->base*$this->height;
        }
    }
    $CN=new Retangle(5,10);
    echo $CN->getArea().'<br>';
    $Tron=new Circle(10);
    echo $Tron->getArea().'<br>';
    $TG=new Triangle(5,10);
    echo  $TG->getArea().'<br>';
?>