<?php 
    class App{
        private $controller = 'product';
        private $action = 'index';
        private $params = [];
        public function __construct(){
            if(isset($_GET['url'])){
                //user/index
                $url = explode('/',$_GET['url']);

                if(isset($url[0])){
                    if(str_contains($url[0],'_')){
                        $valueList= array_map(function($v){
                            return ucfirst($v);
                        },explode('_',$url[0]));

                        $controller= implode('',$valueList);
                    }else{
                        $controller=ucfirst($url[0]);
                    }

                    $this->controller=$controller.'Controller';
                }
                require_once './Controllers/'.$this->controller.'.php';

                $this->controller = new $this->controller();
                if(isset($url[1])){
                    $this->action=$url[1];
                } 

                if(isset($url[2])){
                    $this->params=$url[2];
                } 

                // $this->controller = new $this->controller();
                // var_dump($this->controller);
                // var_dump($this->action);
                call_user_func_array(array($this->controller,$this->action), [$this->params]);
            }
        }
    }
    
?>