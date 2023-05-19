<?php 
    //viet doi tuong - quan ly xe 
    // dieu kien bat buoc 

    //constract  : hop dong dieu khoan 
    // suon xe / dong co / phanh xe / bien so 
    interface Side {
        function Side();
    }
    interface Engine {
        function Engine();
    }
    interface Brake {
        function Brake();
    }
    class Xe{
        private $name;
        private $color;

        //setter
        public function setName($name){
            $this->name=$name;
        }
        public function setColor($color){
            $this->color=$color;
        }
        //getter
        public function getName(){
            return $this->name;
        }
        public function getColor(){
            return $this->$color;
        }
    }

?> 