<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Create User</h1> 
    <form action="" method="POST">
    <label for="">Name</label>
    <br>
    <input type="text" name="name"/>
    <?php echo showError($errors ?? [],'name'); ?> 
    <br>
    <label for="">Email</label>
    <br>
    <input type="email" name="email"/>
    <?php echo showError($errors ?? [],'email'); ?> 
    <br>
    <label for="">Password</label>
    <br>
    <input type="password" name="password"/>
    <?php echo showError($errors ?? [],'password'); ?> 
    
    <input type="submit" value="Create" name="create_user">
    </form>
</body>
</html>