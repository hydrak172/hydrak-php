<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Create Note</h1>
    <form action="" method="POST">
    <label for="">Content</label>
    <br>
    <textarea name ="content"></textarea>
    <?php echo showError($errors ?? [],'content'); ?> 
    <br>
    <label for="">User Id</label>
    <br>
    <select name="user_id" id="">
        <option value="0"><< Please Select >></option>
        <option value="1">1. Nguyen Van A</option>
        <option value="2">2. Le Thi B</option>
        <option value="3">3. Bui Huu C</option>
    </select>
    <?php echo showError($errors ?? [],'user_id'); ?> 
    <br>
    <input type="submit" value="Create" name="create_note">
    </form>
</body>
</html>