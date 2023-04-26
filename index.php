<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HydraK</title>
</head>
<body>    
    <?php
        //variables baat dau bang $A or $_ kh dc phep la so va ky tu dat biet  

        $name = 'Nguyen Van A';
        $age=30;
        $point =7.9;
        $center = 'Greem Academy';
        $address = 'HCM City';
        // echo 'Hello World'; 
        //cach 1 
        //noi chuoi = dau cham 
        echo 'Hello '.$name.'!';
        echo '<br>';
        //cach2 
        echo " Tuoi : $age"; 
        //cach3 
        echo '<br>';
        echo "Study : $center,Location : $address.<br>";
        echo sprintf('Study : %s , Location : %s',$center,$address);
        echo '<br>';
        //if else statement
        if($age<=30){
            //trre running 
            echo "boy";
        }
        else{
            //false running
            echo "girl";
        }
        echo '<br>';
        $point =8.5;
        echo "Point :  $point"; 
        $type = 'gioi';
        $color='green';
        if($point<6.5){
            //trre running 
            $type= "trung binh";
            $color='red';
        }
        else if($point< 8){
            //false running
             $type= "kha";
             $color='yellow';
        }
        echo '<br>Loai : '.$type; 
        // if($type == "gioi"){
        //     echo '<p style="color :green;">'.$type.'</p>';
        // }
        // else if($type == "kha"){
        //     echo '<p style="color :yellow;">'.$type.'</p>';
        // }
        // else{
        //     echo '<p style="color :red;">'.$type.'</p>';
        // }
        echo "<p style='color :$color;'>".$type.'</p>';
    ?> 
    
    <p style='color: $color'>$type</p>
    <p style='color : <?php echo $color;?>'>$type</p>
    <p style='color : <?php echo $color;?>'><?=$type?></p> 


    <?php if($age<=30){
            //trre running 
            echo "boy";
        }
        else{
            //false running
            echo "girl";
        }
    ?>

    <?php 
    if($age<=30){?>
        <p>Boy</p>
    <?php }else {?>
        <p>Girl</p>
    <?php } 
    ?>

    <?php 
        if($age<=30){?>
            <p style='color: blue;'>Boy</p>
        <?php }else if($age <50) {?>
            <p>Fan</p>
        <?php } else {?>
            <p style='color: red;'>Girl</p>
        <?php }
    ?>
    <?php 
    //cach1
        $arrayPoint = [7,8,9];
    //cach2
        $arrayPoint2= array(1,2,3);
        print_r($arrayPoint);
        
        echo '<br>'.$arrayPoint[2]; 
        $arrayNamePoint = ['test' => 8 ,'test1' => 9 ,'test2' => 10 ];
        print_r($arrayNamePoint);
        echo '<br>'.$arrayNamePoint['nguyenvand1']; 
    ?>

</body>
</html>