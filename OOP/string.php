<?php 
    class MyString{
        // static properties 
        public static $PI = 3.14;
        // static method - phuong thuc tinh
        public static function calLengthString($string){
            return strlen($string);
        }
        public static function getPi(){
            return self::$PI;
        }
    }
    // $myString= new MyString; 
    $length= MyString::calLengthString('le van test');
    // $length= $myString->calLengthString('le van test');
    echo $length;
    echo MyString::$PI;
    echo MyString::getPi();
?>