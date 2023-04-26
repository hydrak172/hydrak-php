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


    $arrayNumber2=array(32,27,12,49,48);
    $arrayNumber2[]=13; 
    //xoa 1 phan tu nao do trong mang 
    // unset ($arrayNumber2[3]);
    //xoa het tat ca phan tu trong mang
    // unset($arrayNumber);
    echo '<pre>';
    print_r ($arrayNumber2);
    echo '<pre>'; 
    $total = 0;
     for($i=0;$i<count($arrayNumber2);$i++){
        echo $arrayNumber2[$i].'<br>';
    }
    for($i=0;$i<count($arrayNumber2);$i++){
        $total += $arrayNumber2[$i];
    }
    echo 'Tong = '.$total.'<br>';
    $total2 = 0;
     for($i=0;$i<count($arrayNumber2);$i++){
        if($i%2===0){
            $total2 += $arrayNumber2[$i];
        }
    }
    echo 'Tong so chan= '.$total2.'<br>';
    $total3 = 'khong co so le';
    $i=0;
    $lengthArray=count($arrayNumber2);
    for($i;$i<$lengthArray;$i++){
        if($arrayNumber2[$i]%2!=0){
            $total3 = $arrayNumber2[$i];
            break;
        }
    }
    echo 'Phan tu le dau tien= '.$total3.'<br>'; 

    $i =0;
    while($i<count($arrayNumber2)){
        echo '<br>'.$arrayNumber2[$i];
        $i++;
    }
    $j=0;
    echo '<br>';
     do{
        echo '<br>'.$arrayNumber2[$j];
        $j++;
    }while($j<count($arrayNumber2)); 

    echo '<br>FOREACH';
    foreach($arrayNumber2 as $key=>$value)
    {
        echo "<br>Key : $key value : $value";
    }
    $person=array(
        "name"=>'John',
        "age"=>30,
        "city"=>"New York"
    );
    $arrayKey =array_keys($person);
    $arrayValue=array_values($person);

    echo '<pre>';
    print_r($arrayKey);
    echo '</pre>';
    echo '<pre>';
    print_r($arrayValue);
    echo '</pre>';
?>