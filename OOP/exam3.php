<?php 
    class Circle{
        private $radius;
        const PI=3.14;

        public function __construct($radius){
            $this->radius=$radius;
        }
        public function getArea(){
            // return pi()* pow($this->radius,2);
            return self::PI * pow($this->radius,2);
        }
    }
    //taodoi tuong circle 
    $circle = new Circle(5);

    // hien thi dien tich hinh tron 
    echo "Dien tich hinh tron : ".$circle->getArea().'<br>'; 

    echo "PI : ".Circle::PI;

?>