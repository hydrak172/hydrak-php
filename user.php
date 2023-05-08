<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<?php
    //super global variables
    // double question mac
    // $Email = $_GET['email'] ?? null;
    // $Password = $_GET['password'] ?? null;

    // if(!is_null($Email)&& !is_null($Password)){
    //     echo "Email: $Email <br> Password: $Password";
    //     echo "<br>Tong: $Email + $Password =".$Email + $Password;
    // }
    //bien isset
    echo '<pre>';
    var_dump($_POST);
    echo '</pre>';
    if(isset($_POST['Login'])){
        $Email = $_POST['Email'] ?? null;
        $Password =$_POST['Password'] ?? null;

        echo $Email.$Password;
    }
?>

<body>
    <form method="POST" action="">
        <input type="text" placeholder="Ten dang nhap" name="Email"> <br>
        <input type="password" placeholder="Mat Khau" name="Password" > <br>
        <input type="submit" value="Dang Nhap" name="Login"/>
    </form>

    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>