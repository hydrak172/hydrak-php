<?php 
    class BankAccount{
        private $id;
        private $name;
        protected $balance;
    
        // public function __construct($id,$name,$balance){
        //     $this->id=$id;
        //     $this->name=$name;
        //     $this->balance=$balance;
        // }
        //setter
        public function setID($id){
            $this->id=$id;
        }
        public function setName($name){
            $this->name=$name;
        }
        //getter
        public function getBalance(){
            return $this->balance;
        }
        public function withdraw($myAccount){
             $this->balance -= $myAccount;
        }
        public function deposit($myAccount){
             $this->balance += $myAccount;
        }
    }
    class SavingsAccount extends BankAccount{
        protected $interest_rate;

        public function __construct($interest_rate,$balance){
            $this->interest_rate=$interest_rate;
            $this->balance=$balance;
        }
        public function calculateInterest(){
            $interest = $this->balance *$this->interest_rate  ;
            $this->deposit($interest);
        }
    }


    $savings_account= new SavingsAccount(0.05,1000);
    $savings_account->calculateInterest();
    echo 'tien : '.$savings_account->getBalance();
?>