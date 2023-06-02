<?php 
     function dd($obj){
        echo '<pre>'.var_dump($obj);
    }

    function showError($errors,$input){
        $string = '';
        if(isset($errors[$input])){
            foreach($errors[$input] as $error){
                $string .= '<br>'."<small style='color:red'>".$error.'</small>';
            }
        }
        return $string;
    }
?>

