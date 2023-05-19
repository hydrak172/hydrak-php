<?php 
    abstract class Shape{
        abstract public function getArea();
    }
    class Retangle extends Shape{
        private $width;
        private $height;
        public function __constract($width,$height){
            $this->width=$width;
            $this->height=$height;
        }
        public function getArea(){
            return $this->width * $this->height;
        }
    }
    class Circle extends Shape{
        private $radius;
        public function __constract($radius){
            $this->radius=$radius;
        }
        public function getArea(){
            return pi()*pow($this->radius,2);
        }
    }
    class Triangle extends Shape{
        private $base;
        private $height;
        public function __constract($base,$heigth){
            $this->base=$base;
            $this->height=$height;
        }
        public function getArea(){
            return 0.5*$this->base*$this->height;
        }
    }
    $CN=new Retangle(5,10);
    $CN->getArea();
    echo $CN.'<br>';
    $Tron=new Circle(10);
    $CTronN->getArea();
    echo $Tron.'<br>';
    $TG=new Triangle(5,10);
    $TG->getArea();
    echo $TG.'<br>';
?>