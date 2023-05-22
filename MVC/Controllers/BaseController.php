<?php 
     class BaseController{

        const VIEW_FOLDER='Views';
        protected function view($path){

            $path= str_replace('.','/',$path); //user/list_user
            $path.='.php'; //user/list_user.php
            $path='./'.self::VIEW_FOLDER.'/'.$path;

            return  require $path;
        }
        
    }
?>