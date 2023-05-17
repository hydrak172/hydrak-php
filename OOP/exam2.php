<?php 
    class Rectangle {
        private $width;
        private $height;

        public function __construct($width,$height){
            $this->width=$width;
            $this->height=$height;
        }

        public function getArea(){
            return $this->width*$this->height;
        }

        public function getCircumference(){
            return ($this->width+$this->height)*2;
        }

    }
    //Tao doi tuong rectangle 
    $rectangle = new Rectangle(5,10);

    //Hien thi dien tich hinh chu nhat 
    echo "Chu vi hinh chu nhat la : ".$rectangle->getCircumference().'<br>';
    echo "Dien tich hinh chu nhat la : ".$rectangle->getArea();
?>