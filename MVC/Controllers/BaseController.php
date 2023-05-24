<?php 
     class BaseController{

        const VIEW_FOLDER='Views';
        const VIEW_MODEL='Models';
        protected function view($path,$datas=[]){

            $path= str_replace('.','/',$path); //user/list_user
            $path.='.php'; //user/list_user.php
            $path='./'.self::VIEW_FOLDER.'/'.$path;


            foreach($datas as $key =>$data){
                $$key= $data;
            }

            return  require $path;
        }

        protected function loadModel($path){
            return  require './'.self::VIEW_MODEL.'/'.$path;
        }
        
    }
?>