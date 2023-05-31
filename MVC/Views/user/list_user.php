<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>List User</h1>
    <table border=1>
        <a href="<?= URL.'?url=user/create'?>">Create Note</a>
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Email</th>
            <th>Password</th>
            <th>Create At</th>
            <th>Action</th>
        </tr>
        <?php foreach($users as $key => $user): ?>
            <tr>
                <td><?= $user['id']?></td>
                <td><?= $user['name']?></td>
                <td><?= $user['email']?></td>
                <td><?= $user['password']?></td>
                <td><?= $user['created_at']?></td>
                <td>
                    <a href="<?= URL.'?url=user/detail/'.$user['id']?>">Detail</a>
                    <a onclick="return confirm('Are you sure')" href="<?= URL.'?url=user/delete/'.$user['id']?>">Delete</a>
                </td>
            </tr>
            <?php endforeach ?>
    </table>
</body>
</html>