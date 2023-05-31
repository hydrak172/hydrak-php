

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Update User</h1>
    <form action="" method="POST">
    <label for="">Name</label>
    <br>
    <input type="text" name="name" value="<?= $user['name'] ?>" />
    <?php echo showError($errors ?? [],'name'); ?> 
    <br>
    <label for="">Email</label>
    <br>
    <input type="email" name="email" value = "<?= $user['email'] ?>" />
    <?php echo showError($errors ?? [],'email'); ?> 
    <br>
    <label for="">Password</label>
    <br>
    <input type="password" name="password" value = "<?= $user['password'] ?>"/>
    <?php echo showError($errors ?? [],'password'); ?> 
    
    <input type="hidden" name="id" value="<?= $user['id'] ?>" />
    <input type="submit" value="Update" name="update_user">
    </form>

</body>
</html>