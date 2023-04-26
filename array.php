<?php 
        $arrayNumber=array(10,20,30,40,50);
    echo $arrayNumber[0].'<br>'; // 10
    echo $arrayNumber[2].'<br>'; //30

    //dem tat ca phan tu trong mang 

    $totalItem =count($arrayNumber);
    echo '<br>Count : '.$totalItem;
    /// tang dan
    sort($arrayNumber);

    echo '<pre>';
    print_r($arrayNumber);
    echo '<pre>';
    //giam dan
    rsort($arrayNumber);

    echo '<pre>';
    print_r($arrayNumber);
    echo '<pre>';
    //them 1 phan tu vao mang (name o cuoi mang)
    array_push($arrayNumber,1);

    // them 1 phan tu vao mang (nam o dau mang)
    array_unshift($arrayNumber,2);
    //xoa phan tu cuoi cung cua mamg
    $itemLast = array_pop($arrayNumber);
    echo '<br>ItemLast : '.$itemLast;
    //xoa phan tu dau tien cua mang 
    $itemFirst = array_shift($arrayNumber);
    echo '<br>ItemFirst : '.$itemFirst;
    echo '<br>';
    echo '<pre>';
    print_r($arrayNumber); 

    $fruits1 = ["apple","banana","orange"];
    $fruits12= ["grape","pineapple","watermelon"];
    $all_fruits = array_merge($fruits1,$fruits12);
    echo '<pre>';
    print_r ($all_fruits);
    echo '<pre>';
    
    $arrayNumber[]=13; 
    //xoa 1 phan tu nao do trong mang 
    unset ($arrayNumber[3]);
    //xoa het tat ca phan tu trong mang
    // unset($arrayNumber);
    echo '<pre>';
    print_r ($arrayNumber);
    echo '<pre>'; 


?>