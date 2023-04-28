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
<?php 
//cau 1 tim chuoi dai nhat
    $array = array(
        'asssssssassssss',
        'asssssssassssssss',
        'asssssssassssssssss',
        'asssssssassssssssssss',
        'asssssssassssssssssssss',
        'asssssssassssssssssssssss',
        'asssssssassssssssssssssssssss',
        'asssssssasssssssssssssssssssss',
        'asssssssassssssssssssssssssssss',
        'asssssssasssssssssssssssssssssss',
    );
    echo '<pre>';
    print_r($array);
    echo '</pre>';
    $max_lenght=0;
    $max_string ='';
    foreach($array as $string){
        $length=strlen($string);
        if($length>$max_lenght){
            $max_lenght=$length;
            $max_string=$string;
        }
    }
    
    echo 'Chuoi dai nhat la '.$max_string.' (do dai '.$max_lenght .')';
?>

<?php 
//tim so lon nhat trong chuoi 
    $array=[1,2,3,4,5];
    $max=max($array);
    echo "<br> Gia tri lon nhat trong mang la : ".$max;
?> 
<?php 
//3 cho 1 mang 10 so nguyen 
// hay tim gia tri lon thu 2 trong mang 
    $array =[1,4,6,8,5,9,4,3,5,10,10,10];
    //tao 1 mang khac de loc cac gia tri trung nhau va lay mang do de duyet se kh gap truong hop trung nhau 
    $arrayUnique=array_unique($array);
    // sort ($array);
    // $secord_larget =$array[count($array-2)];
    rsort($arrayUnique);
    $secord_larget =$arrayUnique[1];
    echo '<br> Gia tri lon thu 2 trong mang la '. $secord_larget; 
?>
<?php 
    $array=array(9,2,7,2,5,1);

    echo'<pre>';
    print_r($array);
    echo'</pre>';
    $min=min($array);
    $max=max($array);
    $minIndex=array_search($min,$array);
    $maxIndex=array_search($max,$array);
    echo "<br> Phan tu nho nhat la : $min, o vi tri $minIndex <br>";
    echo "<br> Phan tu lon nhat la : $max, o vi tri $maxIndex <br>";
    //cong tat ca len 5 don vi 
    $array=array_map(function($item){
        return $item +5;
    },$array);
    // for($i=0;$i<count($array);$i++){
    //     $array[$i]+=5;
    // }
    echo'<pre>';
    print_r($array);
    echo'</pre>'; 
        // in ra cac phan tu chan trong mnag 
    $number=array(1,2,3,4,5,6,7,8,9,10);

    $even_numbers=array_filter($number,function($num){
        return $num%2==0;
    });
    echo'<pre>';
    print_r($even_numbers);
    echo'</pre>'; 


    $name = 'nguyen van a';
    $arrayName=explode(' ',$name);
    var_dump($arrayName);
    $test= ['le','van','test'];
    $stringTest= implode(' ',$test);

    var_dump($stringTest); 


    // cach tao friendly url 
    $product = ' quan ao tre em ';
    //b1
    $urlFriendly=implode('-',explode(' ',trim($product)));
    var_dump($urlFriendly); 


    // function generateSeoURL($string, $wordLimit = 0){ 
    //     $separator = '-'; 
         
    //     if($wordLimit != 0){ 
    //         $wordArr = explode(' ', $string); 
    //         $string = implode(' ', array_slice($wordArr, 0, $wordLimit)); 
    //     } 
     
    //     $quoteSeparator = preg_quote($separator, '#'); 
     
    //     $trans = array( 
    //         '&.+?;'                 => '', 
    //         '[^\w\d _-]'            => '', 
    //         '\s+'                   => $separator, 
    //         '('.$quoteSeparator.')+'=> $separator 
    //     ); 
     
    //     $string = strip_tags($string); 
    //     foreach ($trans as $key => $val){ 
    //         $string = preg_replace('#'.$key.'#iu', $val, $string); 
    //     } 
     
    //     $string = strtolower($string); 
     
    //     return trim(trim($string, $separator)); 
    // }
    // $postTitle = 'Generate SEO Friendly URL from String in PHP'; 
 
    // $seoFriendlyURL = generateSeoURL($postTitle); 
    // var_dump($seoFriendlyURL); 
?>