<?php 
    define('URL','http://localhost/hydrak-php');
    $servername="localhost";
    $usernameDB="root";
    $passwordDB="";
    $database="hydrak";
    $port=3307;

    $conn=mysqli_connect($servername,$usernameDB,$passwordDB,$database,$port);

    //check connection 
    if(!$conn){
        die("Connect failed: ".mysqli_connect_error());
    }
    echo "Connect Successfully";

    $date=date('Y-m-d H:i:s');
    // $sql="INSERT INTO user VALUES (1,'a@gmail.com','123','a.png','".$date."')";

    // if($conn->query($sql)===TRUE){
    //     echo "New record created successfully";
    // }else {
    //     echo "ERROR: " .$sql . '<br>' . $conn->error;
    // }

    // $conn->close();
?>
<!-- 
$servername="localhost";
        $username="root";
        $Password="";
        $database="hydrak";
        $port=3307;
    
        $conn=mysqli_connect($servername,$username,$Password,$database,$port);
    
        //check connection 
        if(!$conn){
            die("Connect failed: ".mysqli_connect_error());
        }
        echo "Connect Successfully";
    
        $date=date('Y-m-d H:i:s');
        $sql="INSERT INTO user VALUES (rand(),'".$Email."','".$password."','".$avatar_url."','".$date."')";
    
        if($conn->query($sql)===TRUE){
            echo "New record created successfully";
        }else {
            echo "ERROR: " .$sql . '<br>' . $conn->error;
        }
    
        $conn->close(); -->