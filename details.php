
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
h2{
    display:flex;
    justify-content:center;
    align-items:center;
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
        if(isset($_POST['Update'])){
            $Email=$_POST['Email'];
            $password=$_POST['password'];
            $password =sha1($password.'@asadsajhdskjah');

            $baseFileName=null;

            if($_FILES['avatar_url']){
                $target_dir="uploads/";
                $baseFileName =basename($_FILES["avatar_url"]["name"]);
                $target_file=$target_dir .uniqid(true).'-'.$baseFileName;
                if(move_uploaded_file($_FILES["avatar_url"]["tmp_name"],$target_file)){
                    echo 'Upload thanh cong';
                    //remove old images in storage 
                    unlink('uploads/'.$images_url);
                }else {
                    echo 'Upload that bai';
                }
            }

            //check duplicate entry date
            if(!is_null($baseFileName)){
                $sql="UPDATE hydrak SET Email='".$Email."', password='".$password."' ,images_url='".$baseFileName."' WHERE id=". $_POST['id'];
            }else{
                $sql="UPDATE hydrak SET Email='".$Email."', password='".$password."'". " WHERE id=". $_POST['id'];
            }
            // echo $sql;die;

            $result=mysqli_query($conn,$sql);
            echo $result ? 'Update thanh cong' : 'Update that bai';
            
        }
    ?>
<h2>Update User</h2>
<?php 
     if(isset($_GET['action']) && $_GET['action'] === 'ShowUser' && isset($_GET['id'])){
        $sqlDetails= 'SELECT * FROM hydrak WHERE id ='.$_GET['id'];
        $resultDetails=mysqli_query($conn,$sqlDetails);
        $row = mysqli_fetch_assoc($resultDetails);
        $Email= $row['Email'];
        $password=$row['password'];
        $images_url=$row['images_url'];
    }

?>
    <form enctype="multipart/form-data" method="POST" action="<?php echo $_SERVER['PHP_SELF'];?>" >
        <input type="text" placeholder="Email" name="Email" value ="<?php echo $Email ?? '' ?>"> <br>

        <input type="password" placeholder="password" name="password" value ="<?php echo $password ?? '' ?>"> <br>
        
        <input type="password" placeholder="confirm_password" name="confirm_password" value ="<?php echo $password ?? '' ?>"> <br>
       
        <input type="file" placeholder="Choose_Avatar" name="images_url" value ="<?php echo $images_url ?? '' ?>"> <br>
        
        <input type="submit" value="Update" name="Register" style="background-color:blue;font-size:100%;color:black;"/>
        <input type="hidden" name="id" value="<?php echo $id ?? 0 ?>">
    </form>
    <footer>
        <?php 
             include_once('footer.php');
             include_once('footer.php');
        ?>
    </footer> 
</body>
</html>