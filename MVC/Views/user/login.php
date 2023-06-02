<form action="" method="post">
    <label for="">Email</label>
    <input type="text" name="email"/>
    <br>
    <label for="">Password</label>
    <input type="password" name="password"/>
    <?php echo showError($errors ?? [],'password'); ?> 
    <br>
    <input type="submit" name="login" value="Login">

</form>