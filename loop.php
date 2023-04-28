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
    //1
    echo "<br> <br> In ra cac so tu 1 den 10";
        $i=1;
        for($i;$i<=10;$i++){
            echo "<br>".$i;
        }
    //2 
    echo "<br> <br> Tinh tong cac so tu 1 den 100";
        $j=0;
        $total=0;
        for($j;$j<=100;$j++){
            $total+=$j;
        }
        echo "<br>".$total;
    //3
        echo "<br> <br> in ra bang cuu chuong tu 1 toi 10"."<br>";
        $total2=0;
        ?>
        <table style='border : 1px solid';>
        <?php
        for($i=0;$i<=10;$i++){
            echo " <tr> ";
            for($j=1;$j<=10;$j++)
            {
                echo "<td style='border : 1px solid';>";
                if($i===0){
                    echo sprintf ('Bang cuu chuong %s',$j);
                }else {
                    echo sprintf ('%s x %s = %s',$i,$j,$i*$j);
                }
                echo "</td>";
            }
            echo "</tr>";
        }
        ?>
        </table>
    <?php
    echo "<br> <br> Tim cac so chan";
        for($z=1;$z<=20;$z++){
            if($z%2==0){
                echo "<br>".$z;
            }
        }
    //5
    echo "<br> <br> In ra cac so nguyen to tu 1 den 100 ";
    for($i=2;$i<=100;$i++){
        $isPrime =true;
        for($j=2;$j<=sqrt($i);$j++){
            if($i%$j==0){
                $isPrime = false;
                break;
            }
       }
       if($isPrime ===true){
        echo "<br>".$i." ";
       }
    }
    ?> 
    <table style='border: 10px solid green';> 
        <?php 
            for($i=1;$i<=8;$i++){
            echo "<tr>";
                for($j=1;$j<=8;$j++){
                    if($i%2!=0){
                            if($j%2!=0)
                        {
                            echo "<td style='background-color: white;width:100px;height:100px;'></td>";
                        }
                        else
                        {
                            echo "<td style='background-color: black;width:100px;height:100px;'></td>";
                        }
                    }
                    else { 
                        if($j%2!=0)
                        {
                            echo "<td style='background-color: black;width:100px;height:100px;'></td>";
                        }
                        else 
                        {
                            echo "<td style='background-color: white;width:100px;height:100px;'></td>";
                        }
                    }
                }
            echo "</tr>";
            }
            
        ?>
    </table> 
    <style> 
        td{
            height:100px;
            width:100px;
            border: 2px solid black;
        }
        .while{
            background-color:white;
        }
        .black{
            background-color:black;
        }
    </style>
    <table> 
    <?php 
        $flag=true;
        for($row=1;$row<=8;$row++){
            echo "<tr>";
            for($column=1;$column<=8;$column++){
                $class=($row+$column)%2===0 ? 'while' : 'black';
                echo '<td class="'.$class.'"></td>';
            }
            echo "</tr>";
        }
    ?>

    </table>
</body>
</html>