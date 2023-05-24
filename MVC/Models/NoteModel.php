<?php 
    class NoteModel{
        public function getListProductHot(){
            return [
                ['id'=>1,'name'=>'iphone 12'],
                ['id'=>2,'name'=>'iphone 13'],
                ['id'=>3,'name'=>'iphone 14'],
            ];
        }
        public function getListProductNewArrival(){
            return [
                ['id'=>4,'name'=>'iphone 3'],
                ['id'=>5,'name'=>'iphone 4'],
                ['id'=>6,'name'=>'iphone 5'],
            ];
        }
    }
?>