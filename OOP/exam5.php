<?php 
    class BankAccount{
        private $id;
        private $name;
        private $balance;
    
        public function __construct($id,$name,$balance){
            $this->id=$id;
            $this->name=$name;
            $this->balance=$balance;
        }
        //setter
        public function setID(){
            $this->id=$id;
        }
        public function setName(){
            $this->name=$name;
        }
        //getter
        public function getBalance(){

        }
        public function withdraw(){
            
        }
        public function deposit(){
            
        }
    }
    class SavingsAccount{
        private $interest_rate;
    }

?>