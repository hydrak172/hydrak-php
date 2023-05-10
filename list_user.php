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
        <td><a href="#">Delete</a></td>
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