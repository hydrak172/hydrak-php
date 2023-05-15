<?php 
    Class Cat {
        //attributes
        //access modified
        //public su dung trong va ngoai pham vi class 
        //private chi duoc su dung ben trong class
        //protected dc su dung ben trong class va nhung thang con cua no 
        public $name='meo cui';
        protected $foot=3;
        private $color='chao long';
       //phuong thuc khoi tao //construct 
        //construct se chay khi 
        public function __construct($name,$color,$foot=4){
            $this->name = $name;
            $this->color = $color;
            $this->foot = $foot;
        }
        //method
        public function eat(){
            echo 'An';
        }
        public function run(){
            echo 'Chay';
        }
        public function speak(){
            echo 'Keu';
        }
        //setter 
        public function setName($name){
            $this->name=$name;
        }
        public function setFoot($foot){
            $this->foot=$foot;
        }
        public function setColor($color){
            $this->color=$color;
        }
        //getter 
        public function getName(){
            return $this->name;
        }
        protected function getFoot(){
            return $this->foot;
        }
        private function getColor(){
            return $this->color;
        }
         //phuong thuc khoi tao //destruct 
        //destruct se chay khi 
        public function __destruct(){

        }
    }
    class Dog{}
    // Cat instance of Class Cat 
    // $cat = new Cat;
    // $cat ->name ='Meo';
    // $cat ->foot ='4';
    // $cat ->color ='black';

    // echo "Cat Name :$cat->name , Color : $cat->color , Foot : $cat->foot".'<br>';

    // $cat ->speak();
    // $cat->run();
    // $cat->eat(); 

    // $cat->setName('Mon leo');
    // echo '<br>'.$cat ->getName();
    // $cat->setFoot('6');
    // echo '<br>'.$cat ->getFoot();
    // $cat->setColor('white');
    // echo '<br>'.$cat ->getColor(); 

    // $cat = new Cat ('Meo Canh','Brown','4 ');
    // echo $cat->getName();
    // echo '<br>';
    // echo $cat->name;

    $cat = new Cat ('Meo Canh','Green',4);
    echo $cat->name;
    echo $cat->color;
    echo $cat->foot;
?>