<?php define('URL','http://localhost/hydrak-php/'); ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<a href="<?= URL.'register.php' ?>">Create User</a>
<?php 
    require('database.php');
    $sql="SELECT * FROM hydrak";
    $result= mysqli_query($conn,$sql);

    // if(mysqli_num_rows($result)){

    //     while($row=mysqli_fetch_assoc($result)){
    //         echo "id:" .$row["id"]."- UserName:".$row["username"]." " .$row["password"]."<br>";
    //     }
    // }else{
    //     echo "0 result";
    // } 
    if(isset($_GET['action']) && $_GET['action'] === 'UserDelete' && isset($_GET['id'])){
        $sqlSelect = 'SELECT images_url FROM hydrak WHERE id ='.$_GET['id'];
        $resultSelect = mysqli_query($conn,$sqlSelect);
        $row = mysqli_fetch_assoc($resultSelect);
        $imageURL =$row['images_url'];
        $sqlDelete= "DELETE FROM hydrak WHERE id = ".$_GET['id'];
        $resultDelete = mysqli_query($conn,$sqlDelete); //boolean
        if($resultDelete){
            echo 'Delete thanh cong';
            unlink('uploads/'.$imageURL);
            header('Location: '.URL.'list_user.php');
        }else{
            echo 'Delete that bai';
        } 
    }

?>

<?php 
if(mysqli_num_rows($result)){?>

<?php } else {echo "No results";} ?> 
<?php   mysqli_data_seek($result,0); ?> 
<?php 
if(mysqli_num_rows($result)){?>
<table border="1">
<tr>
    <td>Id</td>
    <td>Email</td>
    <td>password</td>
    <td>Images_URL</td>
    <td>create_at</td>
    <td>Action</td>
</tr>
<?php  while($row=mysqli_fetch_assoc($result)){?>
    <tr> 
        <td><?php echo $row["id"]; ?> </td>
        <td><?php echo $row["Email"]; ?> </td>
        <td><?php echo $row["password"]; ?> </td>
        <td> <img src="uploads/<?php  echo $row["images_url"]; ?>" width="150" height="150"/> </td>
        <td><?php echo $row["create_at"]; ?> </td>
        <td>
            <a href="?action=UserDelete&id=<?php echo $row["id"] ?>" >Delete</a> |
            <a href="<?= URL ?>details.php?action=ShowUser&id=<?php echo $row["id"] ?>" >Details</a>
        </td>
        <!-- <td><a href="?action=delete&id='  php echo $row["id"]; '">Delete</a></td>  -->
        <!-- 3. $action =$_GET['action'];
        $id =$_GET['id'];
        require('database.php')
        if($action === 'deleteUser'){
            $sql = "DELETE FORM USER WHERE id ="" '.$id;
            $result =$conn->query ($sql);
            if($result ===TRUE){
                echo XOa thanh cong ; 

            }else {
                echo XOa that bai 
            }
        } -->
    </tr>
<?php } ?>
</table>
<?php } else {echo "No results";} ?>  
</body>
</html>