<?php 
    require('database.php');

    $sql="SELECT * FROM user";
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
<table border="1">
<?php  while($row=mysqli_fetch_assoc($result)){?>
    <tr> 
        <td><?php echo $row["id"]; ?> </td>
        <td><?php echo $row["username"]; ?> </td>
        <td><?php echo $row["password"]; ?> </td>
        <td><?php echo $row["images_url"]; ?> </td>
        <td><?php echo $row["create_at"]; ?> </td>
    </tr>
<?php } ?>
</table>
<?php } else {echo "No results";} ?>
<?php   mysqli_data_seek($result,0); ?>
<?php 
if(mysqli_num_rows($result)){?>
<table border="1">
<?php  while($row=mysqli_fetch_assoc($result)){?>
    <tr> 
        <td><?php echo $row["id"]; ?> </td>
        <td><?php echo $row["username"]; ?> </td>
        <td><?php echo $row["password"]; ?> </td>
        <td><?php echo $row["images_url"]; ?> </td>
        <td><?php echo $row["create_at"]; ?> </td>
    </tr>
<?php } ?>
</table>
<?php } else {echo "No results";} ?> 
<?php   mysqli_data_seek($result,0); ?> 
<?php 
if(mysqli_num_rows($result)){?>
<table border="1">
<?php  while($row=mysqli_fetch_assoc($result)){?>
    <tr> 
        <td><?php echo $row["id"]; ?> </td>
        <td><?php echo $row["username"]; ?> </td>
        <td><?php echo $row["password"]; ?> </td>
        <td> <img src="uploads/<?php  echo $row["images_url"]; ?>" width="150" height="150"/> </td>
        <td><?php echo $row["create_at"]; ?> </td>
    </tr>
<?php } ?>
</table>
<?php } else {echo "No results";} ?> 