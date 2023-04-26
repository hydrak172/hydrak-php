<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
    echo ('Hello word');
    ?>
    <?= "<br>"."nguyenvana".'<br>'; ?> 
    <?php 
    //operator php 
    $number1 =11;
    $number2 ='10';

    // if($number1 == $number2)
    // {
    //     echo ('hai so = nhau');
    // }else 
    // {
    //     echo ('hai so 0 = nhau');
    // }
    // if($number1 === $number2)
    // {
    //     echo ( ' hai so = nhau & cung kieu du lieu ');
    // }else 
    // {
    //     echo ('hai so = nhau nhung khac kieu du lieu ');
    // } 

    if($number1 >= $number2)
    {
        echo ( 'number1 lon hon number2 '.'<br>');
    }else 
    {
        echo ( 'number1 be hon number2 '.'<br>');
    }
    if($number1 <= $number2)
    {
        echo ( 'number1 be hon number2 '.'<br>');
    }else 
    {
        echo ( 'number1 lon hon number2 '.'<br>');
    }
    $number3=5;
    if($number3%2===0)
    {
        echo ( 'number3 la so chan '.'<br>');
    }else 
    {
        echo ( 'number3 la so le  '.'<br>');
    }
    $number4=2**3;
    echo $number4.'<br>';
    //toan tu gan 
    $number5 =99;
    $number5 =$number5 +1; //100
    $number5 +=1; //100
    $number5 ++; //100 
    echo $number5.'<br>';
    ++$number5;
    echo $number5.'<br>';
    //su khac nhau giua $number++ va ++number
    $number6=99;
    echo ++$number6.'<br>';

    $number7=99;
    echo $number7++.'<br>';
    echo $number7.'<br>'; 

    $number8=7;
    $number8+=3;
    ++$number8;
    $number8--;
    echo 'ket qua : '.--$number8.'<br>';
    echo 'ket qua : '.$number8--.'<br>'; 

    $number9=1;
     if($number8 != $number9 )
    {
        echo ( '2 so khac nhau'.'<br>');
    }
    if($number8 <> $number9) 
    {
        echo ( '2 so khac nhau'.'<br>');
    }
    //and
    if($number7%2===0 && $number8%2===0)
    {
        echo ('2 so la so chan'.$number7.' '.$number8.'<br>');
    }
    //or
    if($number7%2===0 || $number8%2===0)
    {
        echo ('2 so la so chan'.$number7.' '.$number8.'<br>');
    }

    $string1='Ho ten : ';
    $string2='Nguyen Van A';
    echo $string1.$string2.'<br>';
    //Noi chuoi 
    $string1='Ho ten : ';
    $string1 .='Nguyen Van A';
    echo $string1.'<br>';

    $age = 30;
    // if($age>30){
    //     echo 'men';
    // }else
    // {
    //     echo 'boy';
    // }

    echo $age >30 ? 'men':'boy'; 

    echo '<br>';
    
    $nguyenvana = 'Nguyen Van A';
    // $nguyenvana = NULL;
    echo $nguyenvana  ?? 'default';
    echo '<br>';
    $color ='red';
    if($color==='red'){
        echo 'do';
    }else if($color === 'green'){
        echo 'xanh la cay';
    }else{
        echo 'mau mac dinh';
    }
    echo '<br>';
    switch($color){
        case 'red':
            echo 'do';
            break;
        case 'green':
            echo 'xanh la cay';
            break;
        default :
            echo 'mau mac dinh';
    }
    echo '<br>';
    //ARRAY
    $arratPoint =[3,6,1,2,9];   
    echo $arratPoint[3];
    echo '<br>';
    echo $arratPoint[4].'<br>';
    print_r ($arratPoint); 
    echo '<br>';
    $arrayNamePoint =[
                    'nguyen van a'=>3,
                   'nguyen van b'=> 6,
                   'nguyen van c'=>1,
                   'nguyen van d'=>2,
                   'nguyen van e'=>9];
    

    print_r ($arrayNamePoint);
    echo '<br>'.$arrayNamePoint['nguyen van d'];

    $arrayClass =[
        'toan'=>[1,2,3],
        'ly'=>[4,5,6],
        'hoa'=>[7,8,9]
    ];
    echo '<pre>';
    print_r($arrayClass);
    echo '<pre>';

    $arrayNumber=array(10,20,30,40,50);
    echo $arrayNumber[0].'<br>'; // 10
    echo $arrayNumber[2].'<br>'; //30

    $person=array(
        "name"=>'John',
        "age"=>30,
        "city"=>"New York"
    );
    echo $person["name"].'<br>';//John
    echo $person["city"].'<br>'; //New York

    $employees =array(
        array("name"=> "John","age"=>25,"position"=>"Manager"),
        array("name"=> "Mary","age"=>28,"position"=>"Developer"),
        array("name"=> "David","age"=>32,"position"=>"Designer")
    );
    echo '<pre>';
    print_r($employees);
    echo '<pre>';
    echo $employees[0]["name"];//John
    echo $employees[1]["position"];//Developer
  ?>
</body>
</html>