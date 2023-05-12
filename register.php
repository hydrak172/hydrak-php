
<?php define('URL','http://localhost/hydrak-php/'); ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>Document</title>
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
</head>
<style>
    body {
  margin: 0;
  padding: 0;
  height: 100vh;
}
form{
    margin : 0 auto;
    height : 150px;
    max-width: 300px;
    background-color: #17a2b8;
}
</style>
<body>
    <header>
        <?php 
            // include_once('header.php');
            //  require_once('header.php');
            require('database.php');
        ?>
    </header> 
<?php  
echo '<pre>';
var_dump($_FILES);
echo '</pre>';
    $msg=[];
    if(isset($_POST['Register'])){
        $Email = $_POST['Email'] ;
        if(empty($Email)){
            $msg[]='Email is required !';
        }
        else if (!filter_var($Email, FILTER_VALIDATE_EMAIL)) {
            $msg[] = "Invalid email format";
        }
        $password =$_POST['password'] ;
        if(empty($password)){
            $msg[]='password is required !';
        }
        else if(strlen(trim($password))<6){
            $msg[]='password as least 6 character  !';
        }
        $confirm_password =$_POST['confirm_password'] ;
        if(empty($confirm_password)){
            $msg[]='confirm_password is required !';
        }
        else if($password!==$confirm_password){
            $msg[]="confirm password doesn't match !";
        } 

        if($_FILES['avatar_url']){
            $target_dir="uploads/";
            $baseFileName =basename($_FILES["avatar_url"]["name"]);
            $target_file=$target_dir .uniqid(true).'-'.$baseFileName;
            if(move_uploaded_file($_FILES["avatar_url"]["tmp_name"],$target_file)){
                echo 'Upload thanh cong';
            }else {
                echo 'Upload that bai';
            }
        }
        if(count($msg)===0){
            //validate done 
            echo $Email.'<br>'.$password.'<br>'.$confirm_password.'<br>';

            $password =sha1($password.'@asadsajhdskjah');
            //
            // $sql="INSERT INTO user VALUES ('".rand(4,200)."','".$Email."','".$password."','".$baseFileName."','".$date."')";
            $sql=sprintf("INSERT INTO hydrak VALUES(null,'%s','%s','%s','%s')",$Email,$password,$baseFileName,$date);
    
        if($conn->query($sql)===TRUE){
            echo '<br>'."New record created successfully";
            header('Location: '.URL.'list_user.php');
        }else {
            echo "ERROR: " .$sql . '<br>' . $conn->error;
        }
        } 
    }
?>
<div style="color:red;">
    <ul>
        <?php foreach($msg as $m){ ?> 
            <li><?= $m ?></li>
        <?php } ?>
    </ul>
</div>
    <form enctype="multipart/form-data" method="POST" action="<?php echo $_SERVER['PHP_SELF'];?>" >
        <input type="text" placeholder="Email" name="Email" > <br>

        <input type="password" placeholder="password" name="password" > <br>
        
        <input type="password" placeholder="confirm_password" name="confirm_password" > <br>
       
        <input type="file" placeholder="Choose_Avatar" name="avatar_url" > <br>
        
        <input type="submit" value="Dang Ky" name="Register"/>
    </form>
    <footer>
        <?php 
             include_once('footer.php');
             include_once('footer.php');
        ?>
    </footer> 
</body>
</html>